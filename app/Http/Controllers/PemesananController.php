<?php
// app/Http/Controllers/PemesananController.php

namespace App\Http\Controllers;

use App\Models\PemesananDetails;
use App\Models\Pemesanans;
use App\Models\Produk;
use App\Models\Meja;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;


class PemesananController extends Controller
{
public function index(Request $request)
{
    if ($request->ajax()) {
        // Ambil data pemesanan dengan relasi meja dan details.produk
        $data = Pemesanans::with(['meja', 'details.produk'])->latest()->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('meja', function($row) {
                return $row->meja->nama ?? '-';
            })
            ->addColumn('produk', function($row) {
                $produkList = [];
                foreach ($row->details as $detail) {
                    $produkList[] = $detail->produk->nama . ' (x' . $detail->jumlah . ')';
                }
                return implode('<br>', $produkList);
            })
            ->addColumn('aksi', function($row){
                $editUrl = route('pemesanans.edit', $row->id);
                $deleteForm = '
                <form action="'.route('pemesanans.destroy', $row->id).'" method="POST" id="delete-form-'.$row->id.'" style="display:inline;">
                    '.csrf_field().'
                    '.method_field('DELETE').'
                    <button type="button" onclick="confirmDelete('.$row->id.')" class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>';

                return '<a href="'.$editUrl.'" class="btn btn-warning btn-sm">Edit</a> '.$deleteForm;
            })
            ->rawColumns(['produk', 'aksi'])
            ->make(true);
    }

    return view('pemesanan.index');
}

   public function edit($id)
    {
        $pemesanan = Pemesanans::with(['meja', 'details.produk'])->findOrFail($id);
        $mejas = Meja::all();
        $produks = Produk::all();

        return view('pemesanan.edit', compact('pemesanan', 'mejas', 'produks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'meja_id' => 'required|exists:mejas,id',
            'status' => 'required|in:pending,completed,cancelled',
            'produk_id' => 'required|array',
            'produk_id.*' => 'exists:produks,id',
            'jumlah' => 'required|array',
            'jumlah.*' => 'integer|min:1'
        ]);

        // Mulai transaction
        \DB::beginTransaction();

        try {
            $pemesanan = Pemesanans::findOrFail($id);
            $pemesanan->update([
                'meja_id' => $request->meja_id,
                'status' => $request->status
            ]);

            // Hapus detail lama
            PemesananDetails::where('pemesanans_id', $id)->delete();

            // Simpan detail baru
            $total_harga = 0;
            foreach ($request->produk_id as $key => $produk_id) {
                $produk = Produk::find($produk_id);
                $subtotal = $produk->harga * $request->jumlah[$key];

                PemesananDetails::create([
                    'pemesanans_id' => $pemesanan->id,
                    'produk_id' => $produk_id,
                    'jumlah' => $request->jumlah[$key],
                    'harga' => $subtotal
                ]);

                $total_harga += $subtotal;
            }

            // Update total harga
            $pemesanan->update(['total_harga' => $total_harga]);

            \DB::commit();

            return redirect()->route('pemesanans.table')->with('success', 'Pemesanan berhasil diperbarui');

        } catch (\Exception $e) {
            \DB::rollback();
            return back()->with('error', 'Gagal memperbarui pemesanan: '.$e->getMessage());
        }
    }



  public function create(Request $request)
{
    $produk = Produk::all();
    $meja = Meja::all();
    $selectedMejaId = $request->query('meja_id')?? session('meja_id');
    
    // Ambil pesanan pending HANYA untuk meja yang dipilih
    $pendingOrders = Pemesanans::with(['meja', 'details.produk'])
        ->where('status', 'pending')
        ->when($selectedMejaId, function($query) use ($selectedMejaId) {
            return $query->where('meja_id', $selectedMejaId);
        })
        ->latest()
        ->get();
    
    return view('pemesanan.create', compact('produk', 'meja', 'selectedMejaId', 'pendingOrders'));
}


public function store(Request $request)
{
    // Validasi tanpa pembayaran
    $request->validate([
        'meja_id' => 'required|exists:mejas,id',
        'produk_id' => 'required|array|min:1',
        'produk_id.*' => 'exists:produks,id',
        'jumlah' => 'required|array|min:1',
        'jumlah.*' => 'integer|min:1',
    ]);

    // Simpan pemesanan utama
    $pemesanan = Pemesanans::create([
        'meja_id' => $request->meja_id,
        'waktu_pemesanan' => now(),
        'total_harga' => 0,
        'status' => 'pending',
        'pembayaran' => 'kasir', // Default value jika dihilangkan
    ]);

    // Hitung total harga dan simpan detail pemesanan
    $totalHarga = 0;

    foreach ($request->produk_id as $key => $produkId) {
        $produk = Produk::find($produkId);
        $jumlah = $request->jumlah[$key] ?? 1;

        if (!$produk || $jumlah < 1) continue;

        $harga = $produk->harga * $jumlah;

        PemesananDetails::create([
            'pemesanans_id' => $pemesanan->id,
            'produk_id' => $produkId,
            'jumlah' => $jumlah,
            'harga' => $harga,
        ]);

        $totalHarga += $harga;
    }

    // Update total harga pemesanan
    $pemesanan->update(['total_harga' => $totalHarga]);

    return back()->with('success', 'Pemesanan berhasil dibuat! Silakan bayar di kasir setelah selesai.');
}


    public function destroy($id)
    {
        $pemesanan = Pemesanans::findOrFail($id);

        \DB::beginTransaction();
        try {
            // Hapus detail terlebih dahulu
            PemesananDetails::where('pemesanans_id', $id)->delete();

            // Hapus pemesanan
            $pemesanan->delete();

            \DB::commit();

            return redirect()->route('pemesanans.table')->with('success', 'Pemesanan berhasil dihapus');

        } catch (\Exception $e) {
            \DB::rollback();
            return back()->with('error', 'Gagal menghapus pemesanan: '.$e->getMessage());
        }
    }

    public function handleQr(Request $request)
    {
        $mejaId = $request->meja_id;
        if ($mejaId){
            session(['meja_id' => $mejaId]);
        }

        return redirect()->route('pemesanans.create', ['meja_id' => $mejaId]);
    }


public function complete(Request $request)
{
    $request->validate([
        'meja_id' => 'required|exists:mejas,id',
        'pemesanan_ids' => 'required|array',
        'pemesanan_ids.*' => 'exists:pemesanans,id'
    ]);

    try {
        DB::beginTransaction();

        // Update status semua pesanan yang dipilih
        
        Pemesanans::whereIn('id', $request->pemesanan_ids)
            ->update(['status' => 'completed']);

        DB::commit();

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil diselesaikan'
        ]);
        
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'success' => false,
            'message' => 'Gagal menyelesaikan pesanan: ' . $e->getMessage()
        ], 500);
    }
}

}
