<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-hkbp.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Mar 19 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo-hkbp.png" alt="">
                <h1 class="">HKBP Parparean</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/beranda" class="{{($title === "beranda")? 'active' : ''}}">Beranda</a></li>
                    <li class="dropdown has-dropdown"><a href="/layanan"
                            class="{{($title === "layanan")? 'active' : ''}}"><span>Layanan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/pranikah">Pranikah</a></li>
                            <li><a href="/pernikahan">Pernikahan</a></li>
                            <li><a href="/naik_sidi">Naik Sidi</a></li>
                            <li><a href="/babtis">Tardidi</a></li>
                            <li><a href="/jemaat_baru">Jemaat Baru</a></li>
                            <li><a href="/jemaat_pindah">Permohonan Pindah</a></li>

                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/berita"
                            class="{{($title === "berita")? 'active' : ''}}"><span>Berita</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/pengumuman">Pengumuman</a></li>
                            <li><a href="/jadwal_ibadah">Jadwal Ibadah</a></li>
                            <li><a href="/acara">Acara</a></li>
                            <li><a href="/kegiatan">Kegiatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/tentang"
                            class="{{($title === "tentang")? 'active' : ''}}"><span>Tentang</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi Misi</a></li>
                            <li><a href="#">Parhalado</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/koinonia"
                            class="{{($title === "koinonia")? 'active' : ''}}"><span>Koinonia</span></a>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/marturia"
                            class="{{($title === "marturia")? 'active' : ''}}"><span>Marturia</span></a>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/diakonia"
                            class="{{($title === "diakonia")? 'active' : ''}}"><span>Diakonia</span></a>
                    </li>
                    <li><a class="{{($title === "galeri")? 'active' : ''}}" href="/galeri">Galeri</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="/login">Login</a>

        </div>
    </header>
    @yield('header')


    <footer id="footer" class="footer position-relative">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <img src="assets/img/download.png" alt="" style="float:left; width: 50px; height: auto;">
                    <a href="index.html" class="logo d-flex align-items-center"
                        style="text-decoration: none; margin-left: 10px;">
                        <span style="margin-left: 5px;">HKBP PARPAREAN</span>
                    </a>

                    <div class="footer-contact pt-4">
                        <p>Jl. Raja Sipakko, Parparean I</p>
                        <p>Porsea, Sumatera Utara, Indonesia</p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-youtube"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/beranda">Beranda</a></li>
                        <li><a href="/layanan">Layanan</a></li>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="/tentang">Tentang</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Contact</h4>
                    <ul>
                        <p>St.Lenny Manurung</p>
                        <p>+62 821-6776-3400</p>
                        <p>Gr.Hekson Simbolon</p>
                        <p>+62 852-6194-5886</p>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>About Us</h4>
                    <p>HKBP Parparean adalah Gereja HKBP yang berada di Parparean, Porsea, Toba Samosir, dan bernaung di
                        bawah HKBP Distrik IV Toba.</p>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1">HKBP PARPAREAN</strong> <span>All Rights
                        Reserved</span></p>
                <div class="credits">
                </div>
            </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
