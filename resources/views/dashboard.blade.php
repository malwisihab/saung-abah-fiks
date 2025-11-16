@extends('backend.master')

@section('content')
    <div class="container-xl">
        {{-- Header Halaman --}}
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Dashboard
                    </div>
                    <h2 class="page-title">
                        Saung Abah Sukabumi
                    </h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xl mt-5">
        <div class="row row-deck row-cards">
            
            {{-- KARTU SAMBUTAN GAYA HORIZONTAL (FOKUS) --}}
            <div class="col-12">
                {{-- Kartu besar, latar belakang netral, border kiri tebal untuk aksen --}}
                <div class="card card-lg shadow-sm bg-white" style="border-left: 6px solid var(--tblr-info);">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center">
                            
                
                            {{-- Area Kanan: Teks Sambutan --}}
                            <div>
                                <h1 class="display-6 fw-bold text-dark mb-1">
                                    Selamat Datang Kembali, Admin!
                                </h1>
                                <p class="lead text-primary mb-2">
                                    Manajemen **Saung Abah Sukabumi**
                                </p>
                                
                                {{-- Deskripsi Panduan --}}
                                <p class="text-secondary mb-0" style="max-width: 800px;">
                                    Sistem Anda siap digunakan. Silakan kelola menu, lihat pesanan terbaru, dan pantau laporan harian melalui **menu navigasi** yang tersedia. Selamat bekerja!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ---

           
        </div>
    </div>
       
@endsection