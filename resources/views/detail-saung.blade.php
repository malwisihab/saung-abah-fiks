<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <title>Detail Saung | Saung Abah Sukabumi</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     <!-- CSS -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
</head>
<body class="antialiased">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <!-- NAVBAR -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="{{ url('/') }}" class="navbar-brand">Saung <span>.</span> Abah</a>
               </div>

               <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-nav-first">
    <li><a href="{{ request()->is('/') ? '#home' : url('/#home') }}">Beranda</a></li>
    <li><a href="{{ request()->is('/') ? '#about' : url('/#about') }}">Tentang</a></li>
    <li><a href="{{ request()->is('/') ? '#menu' : url('/#menu') }}">Fasilitas</a></li>
    <li><a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}">Alamat</a></li>
    <li><a href="{{ url('/detail-saung') }}" class="{{ request()->is('detail-saung') ? 'active' : '' }}">Detail Saung</a></li>
</ul>



                    <ul class="nav navbar-nav navbar-right">
                         @if (Route::has('login'))
                              @auth
                                   <li><a href="{{ url('/dashboard') }}" class="section-btn">Dashboard</a></li>
                              @else
                                   <li><a href="{{ route('login') }}" class="section-btn">Log in</a></li>
                              @endauth
                         @endif
                         <li><a href="{{ url('pemesanan/create') }}" class="section-btn">Pemesanan</a></li>
                    </ul>
               </div>
          </div>
     </section>

 <!-- CONTENT -->
     <section id="detail" style="padding: 120px 0; background-color: #f9f9f9;">
          <div class="container">
               <div class="row">
                    <div class="col-md-10 col-sm-12 col-md-offset-1 text-center">
                         <h2>Informasi Detail Saung dan Fasilitas</h2>
                         <p style="font-size: 18px; margin-top: 20px;">
                              Saung Abah Sukabumi menyediakan berbagai fasilitas unik dan khas Sunda seperti saung bambu, taman hijau, serta area lesehan yang nyaman untuk keluarga maupun rombongan besar. Suasana asri dan pelayanan ramah adalah nilai utama kami.
                         </p>
                    </div>
               </div>

        <div class="row g-4 justify-content-center">
           <!-- Saung Kecil -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">🏡</div>
            <h5 class="mt-3 fw-bold">12 Saung Kecil</h5>
            <p class="text-muted">Kapasitas 7 orang per saung</p>
        </div>
    </div>

    <!-- Saung Agak Besar -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">🏠</div>
            <h5 class="mt-3 fw-bold">2 Saung Besar</h5>
            <p class="text-muted">Kapasitas maksimal 15 orang per saung</p>
        </div>
    </div>

    <!-- Saung Utama (besar) -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">🏘️</div>
            <h5 class="mt-3 fw-bold">1 Saung Utama</h5>
            <p class="text-muted">Kapasitas maksimal 40 orang</p>
        </div>
    </div>

    <!-- Ruang Meeting -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">👥</div>
            <h5 class="mt-3 fw-bold">Ruang Meeting</h5>
            <p class="text-muted">Kapasitas hingga 50 orang</p>
        </div>
    </div>

    <!-- Cafe -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">☕</div>
            <h5 class="mt-3 fw-bold">Cafe</h5>
            <p class="text-muted">Tersedia aneka makanan & minuman</p>
        </div>
    </div>

    <!-- Live Music -->
    <div class="col-md-4 col-sm-6">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">🎶</div>
            <h5 class="mt-3 fw-bold">Live Music</h5>
            <p class="text-muted">Hadir khusus hari Sabtu & Minggu</p>
        </div>
    </div>

    <!-- Mushola -->
    <div class="col-md-4 col-sm-6 offset-md-4 offset-sm-3">
        <div class="p-4 text-center bg-white rounded shadow-sm h-100 border">
            <div style="font-size: 2rem;">🕌</div>
            <h5 class="mt-3 fw-bold">Mushola</h5>
            <p class="text-muted">Untuk kebutuhan ibadah pengunjung</p>
        </div>
    </div>
</div>

<!-- Kontak Admin -->
<div class="row mt-5">
    <div class="col text-center">
        <p class="lead">
            Cocok untuk acara keluarga, arisan, rapat santai, atau sekadar menikmati suasana alam yang asri.
        </p>
        <p style="font-size: 18px;">
            📞 Hubungi Admin via WhatsApp: <br>
            <a href="https://wa.me/628979831000" target="_blank" class="fw-bold text-success">+62 897-9831-000</a>
        </p>
    </div>
</div>
    </div>
</section>


               <!-- Galeri Fasilitas -->
               <div class="row" style="margin-top: 60px;">
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung 1.jpg') }}" class="image-popup" title="Saung 1">
                                   <img src="{{ asset('images/saung 1.jpg') }}" class="img-responsive" alt="Saung">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>saung 1</h3>
                                             <p>Restoran Saung Abah menyediakan mushola yang bersih dan nyaman bagi pelanggan yang ingin melaksanakan ibadah. Dilengkapi dengan tempat wudhu yang terawat, sehingga memberikan kenyamanan saat beribadah.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung2.jpg') }}" class="image-popup" title="Saung 2">
                                   <img src="{{ asset('images/saung2.jpg') }}" class="img-responsive" alt="Saung 2">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 2</h3>
                                             <p>Ruang rapat nyaman dilengkapi meja besar dan kursi yang mendukung untuk pertemuan bisnis, acara keluarga, atau gathering perusahaan.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung4.jpg') }}" class="image-popup" title="saung 4">
                                   <img src="{{ asset('images/saung4.jpg') }}" class="img-responsive" alt="saung 4">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 4</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung_katineng.jpg') }}" class="image-popup" title="saung katineng">
                                   <img src="{{ asset('images/saung_katineng.jpg') }}" class="img-responsive" alt="saung katineng">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung Katineng </h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung_kagegeut.jpg') }}" class="image-popup" title="saung kagegeut">
                                   <img src="{{ asset('images/saung_kagegeut.jpg') }}" class="img-responsive" alt="saung kagegeut">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung Kagegeut</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung_kanyaah.jpg') }}" class="image-popup" title="saung kanyaah">
                                   <img src="{{ asset('images/saung_kanyaah.jpg') }}" class="img-responsive" alt="saung kanyaah">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung Kanyaah</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung_kaasih.jpg') }}" class="image-popup" title="saung kaasih">
                                   <img src="{{ asset('images/saung_kaasih.jpg') }}" class="img-responsive" alt="saung kaasih">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung Kaasih</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="saung 3">
                                   <img src="{{ asset('images/saung3.jpg') }}" class="img-responsive" alt="saung 3">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Saung 3</h3>
                                             <p>Area parkir luas untuk motor dan mobil. Lokasi strategis dan aman memudahkan pelanggan memarkirkan kendaraannya.</p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer" style="background-color: #222; color: white; padding: 40px 0;">
          <div class="container text-center">
               <p>© 2025 Saung Abah Sukabumi. All rights reserved.</p>
          </div>
     </footer>

     <!-- JS -->
     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('js/smoothscroll.js') }}"></script>
     <script src="{{ asset('js/custom.js') }}"></script>

     <!-- Inisialisasi Magnific Popup -->
     <script>
          $(document).ready(function () {
               $('.image-popup').magnificPopup({
                    type: 'image',
                    gallery: {
                         enabled: true
                    }
               });
          });
     </script>
</body>
</html>
