<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <title>Saung Abah Sukabumi</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     <!-- CSS -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

     <style>
          /* Tailwind CSS styles from welcome page */
          /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
          /* [Previous CSS content from welcome page] */
          /* ... (all the CSS from the welcome page's style tag) ... */
     </style>
</head>
<body class="antialiased">
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="#home" class="navbar-brand">Saung <span>.</span> Abah</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Beranda</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang</a></li>
                         <li><a href="#menu" class="smoothScroll">Fasilitas</a></li>
                         <li><a href="#contact" class="smoothScroll">Alamat</a></li>
                         <li><a href="{{ route('detail.saung') }}">Detail Saung</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         @if (Route::has('login'))
                              @auth
                                   <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                              @else
                                   <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                              @endauth
                         @endif
                         <li><a href="{{ url('pemesanan/create') }}" class="section-btn">Pemesanan</a></li>
                    </ul>
               </div>
          </div>
     </section>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">
               <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3> Cafe &amp; Restaurant</h3>
                                        <h1>Menghadirkan Makanan Khas Sunda Terbaik Di Sukabumi</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Lihat Menu</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h1>Restoran Dengan Fasilitas yang Lengkap dan Nyaman</h1>
                                        <a href="#menu" class="section-btn btn btn-default smoothScroll">Lihat Fasilitas</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Restoran Sunda Terbaik di Sukabumi! Rasakan kelezatan autentik kuliner Sunda hanya di Saung Abah.</h3>
                                        <h1>Nikmati Makanan Favorite di Saung Abah Setiap Hari</h1>
                                        <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Baca cerita kami</h4>
                                   <h2>Tentang Saung Abah Resto & Cafe</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Sejak tahun 1999, Saung Abah Resto & Cafe telah menjadi tempat favorit bagi pecinta kuliner Sunda. Terletak di Jl. Salabintana KM. 5, Sudajaya Girang, Sukabumi, kami menghadirkan suasana tradisional yang nyaman dengan konsep saung khas pedesaan.</p>
                                   <p>Kami menyajikan berbagai hidangan lezat seperti Nasi Liwet, Gurame Bakar, dan Ayam Kampung Goreng, semuanya dibuat dari bahan segar dengan cita rasa autentik. Dengan suasana asri dan pelayanan ramah, kami siap memberikan pengalaman bersantap yang tak terlupakan.</p>
                                   <p>Selamat datang di Saung Abah Resto & Cafe, tempat di mana kelezatan makanan bertemu dengan ketenangan alam.<p>
                              </div>
                         </div>
                    </div>

                     <div class="col-md-6 col-sm-12 d-flex align-items-start">
        <div class="about-image w-100" style="overflow: hidden;">
            <img src="images/image.jpg"
                 alt=""
                 class="img-fluid"
                 style="width: 100%; height: 100%; object-fit: cover; max-height: 500px;">
        </div>
    </div>
               </div>
          </div>
     </section>

     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Signature Menu</h2>
                              <h4>Saung Abah Sukabumi</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/patin_bakar.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Patin Bakar</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                  <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Patin Bakar</h3>
                              <p>Patin bakar dengan bumbu rempah pilihan yang meresap hingga ke dalam dagingnya, dipanggang sempurna untuk menghasilkan cita rasa gurih, pedas, dan smoky yang memanjakan lidah.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/cumi_bumbu_padang.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>cumi bumbu padang</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-instagram"></a></li>
                                                  <li><a href="#" class="fa fa-flickr"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>cumi bumbu padang</h3>
                              <p>Cumi segar dimasak dengan bumbu Padang khas yang kaya akan rempah dan sensasi pedas menggigit, menciptakan rasa kuat dan lezat khas masakan Sunda.</p>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/gurame_bumbu_rujak.png" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>gurame bumbu rujak</h4>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fa fa-github"></a></li>
                                                  <li><a href="#" class="fa fa-google"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>gurame bumbu rujak</h3>
                              <p>Gurame segar digoreng garing lalu disiram dengan bumbu rujak khas yang kaya rempah dan rasa pedas manis, menciptakan harmoni cita rasa Nusantara dalam setiap suapan.</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Fasilitas Utama Saung Abah</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Mushola1.jpg" class="image-popup" title="Mushola Pertama">
                                   <img src="images/Mushola1.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>MUSHOLA</h3>
                                             <p>Restoran Saung Abah menyediakan mushola yang bersih dan nyaman bagi pelanggan yang ingin melaksanakan ibadah.
                                                Dilengkapi dengan tempat wudhu yang terawat, sehingga memberikan kenyamanan saat beribadah.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Ruang_Rapat.jpg" class="image-popup" title="Ruang Rapat ">
                                   <img src="images/Ruang_Rapat.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Ruang Rapat</h3>
                                             <p>Disediakan ruang rapat yang nyaman dan dilengkapi dengan fasilitas pendukung seperti meja besar dan kursi yang nyaman.
                                                Cocok untuk pertemuan bisnis, acara keluarga, maupun gathering perusahaan.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Parkir1.jpg" class="image-popup" title="Parkir 1">
                                   <img src="images/Parkir1.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Tempat Parkir</h3>
                                             <p>Area parkir luas dan aman, tersedia untuk kendaraan roda dua maupun roda empat. Dengan lokasi yang strategis,
                                                  pelanggan dapat dengan mudah memarkirkan kendaraannya tanpa khawatir.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                    
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Caffe" class="image-popup" title="Caffe">
                                   <img src="images/Caffe.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Caffe </h3>
                                             <p>Fasilitas toilet di restoran ini selalu terjaga kebersihannya. Tersedia air bersih, sabun cuci tangan, dan tisu untuk kenyamanan pelanggan, disediakan juga toilet wanita dan pria.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                       
                     <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Tempat_Makanan2.jpg" class="image-popup" title="Tempat Makan">
                                   <img src="images/Tempat_Makan2.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Tempat Makan</h3>
                                             <p>Fasilitas toilet di restoran ini selalu terjaga kebersihannya. Tersedia air bersih, sabun cuci tangan, dan tisu untuk kenyamanan pelanggan, disediakan juga toilet wanita dan pria.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/Toilet.jpg" class="image-popup" title="Toilet">
                                   <img src="images/Toilet.jpg" class="img-responsive" alt="">
                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Toilet</h3>
                                             <p>Fasilitas toilet di restoran ini selalu terjaga kebersihannya. Tersedia air bersih, sabun cuci tangan, dan tisu untuk kenyamanan pelanggan, disediakan juga toilet wanita dan pria.</p>
                                        </div>
                                        <div class="menu-price">
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Kata Mereka</h2>
                         </div>
                    </div>

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Ulasan untuk testimoni restaurant saung abah sukabumi</p>
                                        <div class="tst-author">
                                             <h4>M.Alwi Sihab</h4>
                                             <span>Teknik Informatika</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Slide dua untuk kalimat lanjut testimonial saung abah sukabumi.</p>
                                        <div class="tst-author">
                                             <h4>Ikhsan Muttaqin</h4>
                                             <span>Teknik Informatika</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Tempatnya nyaman, Makanananya enak, Luass dan ramah ramah </p>
                                        <div class="tst-author">
                                             <h4>Akbar Sihab</h4>
                                             <span>Teknik Informatika</span>
                                        </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0330029102115!2d106.94042007499617!3d-6.886650393112347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684995c9772ee5%3A0xd4e3a53d33f4d066!2sSaung%20Abah!5e0!3m2!1sen!2sid!4v1742438195569!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="col-md-6 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                          <a href="images/cafeandrestaurant.jpg" class="image-popup" title="cafe">
                          <img src="images/cafeandrestaurant.jpg" class="img-responsive" alt="">                         
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Temukan Kami Di</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Jl. Salabintana KM. 5, Sudajaya Girang, Kab. Sukabumi, Kabupaten Sukabumi, Jawa Barat 43151</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Informasi</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>+62 897-9831-000</p>
                                   <p>Whatsapp</p>
                                   <p><a href="mailto:info@company.com">info@company.com</a></p>
                                   <p>Instagram: @saungabahrestocafe </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Jam Operasional</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Buka Setiap Hari</p>
                                   <div>
                                        <strong>Senin - Minggu</strong>
                                        <p>10:30 PAGI - 9:00 MALAM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                   <div class="col-md-2 col-sm-4">
    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
        <li>
            <a href="https://www.instagram.com/saungabahrestocafe" target="_blank" class="fa fa-instagram"></a>
        </li>
        <li>
            <a href="https://www.google.com/search?q=Saung+Abah+Sukabumi" class="fa fa-google"></a>
        </li>
    </ul>

    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
        <p><br>Copyright &copy; 2025 <br>Saung Abah SUKABUMI</p>
    </div>
</div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('js/wow.min.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('js/smoothscroll.js') }}"></script>
     <script src="{{ asset('js/custom.js') }}"></script>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
