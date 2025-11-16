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

     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <style>
        /* Definisi Warna Merah Utama Anda */
        :root {
            --primary-red: #D32525;
            --hover-red: #B01F1F;
            --dark-gray: #333;
            --light-gray: #f9f9f9;
        }
        
        /* Gaya Hero Section - Dipertahankan */
        .hero-detail {
            height: 400px;
            background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('{{ asset('images/saung_main_background.jpg') }}') center center no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
            margin-top: 70px;
        }
        
        .hero-detail h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .hero-detail p {
            font-size: 1.15rem;
            max-width: 650px;
            margin: 0 auto;
        }
        
        /* Container Ikon: Menggunakan Warna Merah Tema */
        .card-feature .icon-container {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%; 
            background-color: var(--primary-red);
            color: white;
            box-shadow: 0 2px 8px rgba(211, 37, 37, 0.4);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .card-feature:hover .icon-container {
            background-color: var(--hover-red);
            transform: scale(1.05);
        }

        .card-feature .icon-container i {
            font-size: 2.2rem;
            line-height: 1;
        }

        /* Style Kartu Fasilitas - Dibuat lebih elegan */
        .card-feature {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
        }

        .card-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }

        .card-feature h5 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-gray);
            margin-bottom: 8px;
        }
        
        .card-feature p {
            font-size: 0.95rem;
            color: #777;
        }
        
        /* Penataan Section */
        #fasilitas-section {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        #gallery-section {
             padding: 80px 0 120px 0;
             background-color: white;
        }
        
        /* Judul Section */
        #fasilitas-section h2, #gallery-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-gray);
            margin-bottom: 50px;
        }
        
        /* Style Tombol WhatsApp - Dibuat lebih kontras */
        .whatsapp-card {
            background-color: #fff;
            border: none;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-card .section-btn {
            background-color: var(--primary-red) !important; 
        }

        .whatsapp-card .section-btn:hover {
            background-color: var(--hover-red) !important;
        }
        
        
        /* ======================================= */
        /* --- CSS GALERI (Monokromatik & Simpel) --- */
        /* ======================================= */
        
        .image-gallery-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            cursor: pointer;
        }
        
        .image-gallery-item a.image-popup {
            display: block;
            text-decoration: none;
        }

        .image-gallery-item:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            transform: scale(1.02);
        }

        .image-gallery-item img {
            width: 100%;
            height: 250px; 
            object-fit: cover;
            display: block;
            filter: grayscale(0%);
            transition: transform 0.6s ease, filter 0.4s ease;
        }
        
        .image-gallery-item:hover img {
            transform: scale(1.1);
            filter: grayscale(30%);
        }

        .image-gallery-info {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            
            background-color: rgba(0, 0, 0, 0); 
            color: white;
            
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            
            opacity: 0;
            transition: background-color 0.4s ease, opacity 0.4s ease;
        }
        
        .image-gallery-item:hover .image-gallery-info {
            background-color: rgba(0, 0, 0, 0.65);
            opacity: 1;
        }

        .image-gallery-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 5px;
            color: white;
            border-bottom: 2px solid var(--primary-red); /* Aksen Merah Tipis */
            padding-bottom: 5px;
        }

        .image-gallery-info p {
            font-size: 0.95rem;
            margin-bottom: 0;
            color: #ddd;
            transform: translateY(10px);
            transition: transform 0.4s ease 0.1s;
        }
        
        .image-gallery-item:hover .image-gallery-info p {
            transform: translateY(0);
        }
        /* ======================================= */
        /* --- AKHIR CSS GALERI --- */
        /* ======================================= */

    </style>
</head>
<body class="antialiased">

     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

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



<section id="fasilitas-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 style="margin-bottom: 5px;">Fasilitas Saung Abah</h2>
        <p style="margin-top: 0;">
          Nikmati suasana khas Sunda yang asri di Saung Abah. Kami menyediakan fasilitas saung bambu yang nyaman, area makan yang luas, dan pelayanan yang ramah untuk berbagai kebutuhan acara Anda.
        </p>
      </div>
    </div>
  </div>
</section>


        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-house-chimney"></i></div>
                    <h5 class="fw-bold">12 Saung Kecil</h5>
                    <p class="text-muted">Kapasitas **6-7 orang** per saung, ideal untuk bersantap keluarga.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-people-group"></i></div>
                    <h5 class="fw-bold">2 Saung Besar</h5>
                    <p class="text-muted">Kapasitas maksimal **15 orang**, cocok untuk rombongan kecil hingga menengah.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-mountain-city"></i></div>
                    <h5 class="fw-bold">1 Saung Utama</h5>
                    <p class="text-muted">Kapasitas maksimal **40 orang**, khusus untuk acara besar atau gathering.</p>
                </div>
            </div>
        </div> 

     
        
        <div class="row g-4 justify-content-center"> 
            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-chalkboard-user"></i></div>
                    <h5 class="fw-bold">Ruang Meeting</h5>
                    <p class="text-muted">Kapasitas hingga **50 orang**, nyaman untuk rapat atau pelatihan.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-coffee"></i></div>
                    <h5 class="fw-bold">Cafe Area</h5>
                    <p class="text-muted">Tersedia Cafe dengan aneka makanan dan minuman modern.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-guitar"></i></div>
                    <h5 class="fw-bold">Live Music</h5>
                    <p class="text-muted">Hiburan **Live Music** untuk menemani santap sore setiap **Sabtu & Minggu**.</p>
                </div>
            </div>
        </div> 
        
        <div class="row g-4 justify-content-center"> 
            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-mosque"></i></div>
                    <h5 class="fw-bold">2 Mushola</h5>
                    <p class="text-muted">Mushola terletak di area atas (parkiran) dan bawah (dekat saung besar).</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-car"></i></div>
                    <h5 class="fw-bold">Parkir Luas</h5>
                    <p class="text-muted">Area parkir yang memadai dan aman untuk mobil, motor, hingga **bus pariwisata**.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-feature">
                    <div class="icon-container"><i class="fas fa-wifi"></i></div>
                    <h5 class="fw-bold">Akses WiFi</h5>
                    <p class="text-muted">Nikmati koneksi internet yang **cepat dan stabil** untuk semua pengunjung.</p>
                </div>
            </div>
        </div> 

        <div class="row mt-5">
            <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1 text-center">
            
                <p class="lead" style="margin-bottom: 20px; font-weight: 500; color: var(--dark-gray); font-size: 1.2rem;">
                    Tertarik dengan salah satu saung? Hubungi kami untuk reservasi dan cek ketersediaan.
                </p>

                <div class="whatsapp-card card-feature">
                    
                    <h4 class="fw-bold" style="color: var(--primary-red); margin-bottom: 5px; font-size: 1.5rem;">
                        Reservasi Saung Anda Sekarang
                    </h4>
                    <p style="color: #666; margin-bottom: 25px; font-size: 0.95rem;">
                        Hubungi Admin kami untuk cek ketersediaan tempat dan informasi lebih lanjut.
                    </p>

                    <a href="https://wa.me/628979831000?text=Halo%20Saung%20Abah%2C%20saya%20ingin%20tanya%20detail%20saung%20dan%20melakukan%20pemesanan." 
                       target="_blank" 
                       class="section-btn btn-lg" 
                       style="
                            padding: 12px 30px; 
                            border-radius: 50px; 
                            font-size: 1.1rem; 
                            text-transform: uppercase; 
                            font-weight: 700; 
                            transition: background-color 0.2s ease;
                        "
                        onmouseover="this.style.backgroundColor='#B01F1F';"
                        onmouseout="this.style.backgroundColor='#D32525';"
                    >
                        <i class="fab fa-whatsapp"></i> CHAT WHATSAPP (+62 897-9831-000)
                    </a>

                    <p style="font-size: 0.85rem; color: #999; margin-top: 15px; margin-bottom: 0;">
                        (Layanan cepat dan responsif)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section id="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Galeri Saung dan Lingkungan</h2>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung 1.jpg') }}" class="image-popup" title="Saung 1">
                           <img src="{{ asset('images/saung 1.jpg') }}" alt="Saung 1">
                           <div class="image-gallery-info">
                                <h3>Saung 1</h3>
                                <p>Saung bambu yang nyaman, cocok untuk bersantai dan menikmati hidangan.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung2.jpg') }}" class="image-popup" title="Saung 2">
                           <img src="{{ asset('images/saung2.jpg') }}" alt="Saung 2">
                           <div class="image-gallery-info">
                                <h3>Saung 2</h3>
                                <p>Desain tradisional dengan pemandangan alam yang menenangkan.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung3.jpg') }}" class="image-popup" title="Saung 3">
                           <img src="{{ asset('images/saung3.jpg') }}" alt="Saung 3">
                           <div class="image-gallery-info">
                                <h3>Saung 3</h3>
                                <p>Saung luas untuk keluarga atau rombongan besar, dilengkapi bantal lesehan.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung4.jpg') }}" class="image-popup" title="Saung 4">
                           <img src="{{ asset('images/saung4.jpg') }}" alt="Saung 4">
                           <div class="image-gallery-info">
                                <h3>Saung 4</h3>
                                <p>Saung dengan pemandangan indah, ideal untuk bersantap sambil menikmati alam.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung_katineng.jpg') }}" class="image-popup" title="Saung Katineng">
                           <img src="{{ asset('images/saung_katineng.jpg') }}" alt="Saung Katineng">
                           <div class="image-gallery-info">
                                <h3>Saung Katineng</h3>
                                <p>Saung Katineng, tempat yang pas untuk bercengkrama dengan orang terdekat.</p>
                           </div>
                      </a>
                 </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung_kagegeut.jpg') }}" class="image-popup" title="Saung Kagegeut">
                           <img src="{{ asset('images/saung_kagegeut.jpg') }}" alt="Saung Kagegeut">
                           <div class="image-gallery-info">
                                <h3>Saung Kagegeut</h3>
                                <p>Saung Kagegeut, suasana hangat untuk pertemuan keluarga atau teman.</p>
                        </div>
                   </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung_kanyaah.jpg') }}" class="image-popup" title="Saung Kanyaah">
                           <img src="{{ asset('images/saung_kanyaah.jpg') }}" alt="Saung Kanyaah">
                           <div class="image-gallery-info">
                                <h3>Saung Kanyaah</h3>
                                <p>Tempat yang nyaman untuk bersantai dan menikmati hidangan spesial.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saung_kaasih.jpg') }}" class="image-popup" title="Saung Kaasih">
                           <img src="{{ asset('images/saung_kaasih.jpg') }}" alt="Saung Kaasih">
                           <div class="image-gallery-info">
                                <h3>Saung Kaasih</h3>
                                <p>Cocok untuk melepas penat dengan pemandangan hijau.</p>
                           </div>
                      </a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungPamanggihBaja.jpg') }}" class="image-popup" title="Saung Pamanggih Baja ">
                           <img src="{{ asset('images/saungPamanggihBaja.jpg') }}" alt="Saung Pamanggih Baja ">
                           <div class="image-gallery-info">
                                <h3>Saung Pamanggih Baja</h3>
                                <p>Saung nyaman untuk bersantap, dikelilingi suasana asri.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungPanineungan.jpg') }}" class="image-popup" title="Saung Panineungan ">
                           <img src="{{ asset('images/saungPanineungan.jpg') }}" alt="Saung Panineungan">
                           <div class="image-gallery-info">
                                <h3>Saung Panineungan</h3>
                                <p>Area makan semi-outdoor dengan kapasitas sedang.</p>
                           </div>
                      </a>
                 </div>
            </div>

            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungKaemut.jpg') }}" class="image-popup" title="Saung Kaemut">
                           <img src="{{ asset('images/saungKaemut.jpg') }}" alt="Saung Kaemut">
                           <div class="image-gallery-info">
                                <h3>Saung Kaemut</h3>
                                <p>Pilihan saung lain untuk pengalaman bersantap yang tenang.</p>
                           </div>
                      </a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungBesar.jpg') }}" class="image-popup" title="Saung Besar">
                           <img src="{{ asset('images/saungBesar.jpg') }}" alt="Saung Besar">
                           <div class="image-gallery-info">
                                <h3>Saung Besar</h3>
                                <p>Saung dengan desain minimalis namun tetap nyaman.</p>
                           </div>
                      </a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungKawaas.jpg') }}" class="image-popup" title="Saung Kawaas">
                           <img src="{{ asset('images/saungKawaas.jpg') }}" alt="Saung Kawaas">
                           <div class="image-gallery-info">
                                <h3>Saung Kawaas</h3>
                                <p>Saung yang berdekatan dengan area taman.</p>
                           </div>
                      </a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungTanpaNama.jpg') }}" class="image-popup" title="Saung Tanpa Nama">
                           <img src="{{ asset('images/saungTanpaNama.jpg') }}" alt="Saung Tanpa Nama">
                           <div class="image-gallery-info">
                                <h3>Saung Tanpa Nama</h3>
                                <p>Pilihan lain untuk bersantap dengan suasana tenang.</p>
                           </div>
                      </a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="image-gallery-item">
                      <a href="{{ asset('images/saungKembar.jpg') }}" class="image-popup" title="Saung Kembar">
                           <img src="{{ asset('images/saungKembar.jpg') }}" alt="Saung Kembar">
                           <div class="image-gallery-info">
                                <h3>Saung Kembar</h3>
                                <p>Saung yang cocok untuk menikmati hidangan bersama keluarga.</p>
                           </div>
                      </a>
                 </div>
            </div>
            
        </div>
    </div>
</section>

     <footer id="footer" style="background-color: #222; color: white; padding: 40px 0;">
          <div class="container text-center">
               <p>© 2025 Saung Abah Sukabumi. All rights reserved.</p>
          </div>
     </footer>

     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('js/smoothscroll.js') }}"></script>
     <script src="{{ asset('js/custom.js') }}"></script>

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