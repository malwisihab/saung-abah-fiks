<?php

namespace App\Http\Controllers;

use App\Models\Pemesanans;
use App\Models\Meja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompletedPemesananController extends Controller
{
    /**
     * Menampilkan form konfirmasi (GET)
     */
    public function showCompleteForm($meja_id)
    {
        $meja = Meja::findOrFail($meja_id);
        $pendingOrders = Pemesanans::with(['details.produk', 'meja'])
            ->where('meja_id', $meja_id)
            ->where('status', 'pending')
            ->get();

        if($pendingOrders->isEmpty()) {
            return redirect()->route('pemesanans.index')
                           ->with('warning', 'Tidak ada pesanan pending untuk meja ini');
        }

        return view('pemesanans.complete', [
            'meja' => $meja,
            'pendingOrders' => $pendingOrders,
            'selectedMejaId' => $meja_id // Tambahkan ini untuk form
        ]);
    }

    /**
     * Proses penyelesaian pesanan (POST) - Opsi 1
     */
    public function complete(Request $request)
    {
        $request->validate([
            'meja_id' => 'required|exists:mejas,id',
            'pemesanan_ids' => 'required|array',
            'pemesanan_ids.*' => 'exists:pemesanans,id'
        ]);

        DB::beginTransaction();
        try {
            $meja = Meja::findOrFail($request->meja_id);

            // Update pesanan
            $updated = Pemesanans::whereIn('id', $request->pemesanan_ids)
                               ->update([
                                   'status' => 'completed',
                                   'completed_at' => now()
                               ]);

            // Update meja jika tidak ada pesanan pending
            if(!Pemesanans::where('meja_id', $meja->id)
                         ->where('status', 'pending')
                         ->exists()) {
                $meja->update(['status' => 'kosong']);
            }

            DB::commit();

            return redirect()->route('pemesanans.index')
                           ->with('success', '✅ ' . $updated . ' pesanan selesai! Meja ' . $meja->nomor_meja . ' kosong.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                           ->with('error', '❌ Gagal: ' . $e->getMessage());
        }
    }
}   