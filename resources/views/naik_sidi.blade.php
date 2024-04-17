<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Beranda</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/download.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/download.png" alt="" />
                <h1 class="">HKBP Parparean</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/beranda" class="active">Beranda</a></li>
                    <li><a href="/layanan">Layanan</a></li>
                    <li class="dropdown has-dropdown"><a href="/berita"><span>Berita</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/pengumuman">Pengumuman</a></li>
                            <li><a href="/jadwal_ibadah">Jadwal Ibadah</a></li>
                            <li><a href="/tingting">Tingting</a></li>
                            <li><a href="/acara">Acara</a></li>
                            <li><a href="/kegiatan">Kegiatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/tentang"><span>Tentang</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi Misi</a></li>
                            <li><a href="#">Parhalado</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/koinonia"><span>Koinonia</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi Misi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/marturia"><span>Marturia</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi Misi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown has-dropdown"><a href="/diakonia"><span>Diakonia</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Visi Misi</a></li>
                        </ul>
                    </li>
                    <li><a href="/galeri">Galeri</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="courses.html">Login</a>
        </div>
    </header>

    <main id="main">
        <section id="layanan" class="layanan section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p class="text1">Pendaftaran Sidi HKBP Parparean</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <form action="#" method="post">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama Ayah (atau Wali):</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="wijk">Wijk:</label>
                                    <input type="text" class="form-control" id="wijk" name="wijk"
                                        placeholder="Masukkan Wijk" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nomor_kontak">Nomor Kontak:</label>
                                    <input type="tel" class="form-control" id="nomor_kontak" name="nomor_kontak"
                                        placeholder="Nomor HP (ex:0822xxxxxxxx)" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Masukkan Alamat" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="mail">Mail:</label>
                                    <input type="email" class="form-control" id="mail" name="mail"
                                        placeholder="Email (ex:hkbpparparean@gmail.com)" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="info">Anggota Keluarga Yang Akan Naik Sidi(Nama/Gender/Tanggal
                                        Lahir):</label>
                                    <textarea class="form-control" id="info" name="info" rows="5"
                                        placeholder="(ex:RoyZeky Aritonang/Pria/30 Desember 2003)" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <label for="akte_kelahiran" class="d-block">Upload Akte Kelahiran:</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control-file" id="akte_kelahiran"
                                                    name="akte_kelahiran" required />
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="surat_baptis" class="d-block">Upload Surat Baptis:</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control-file" id="surat_baptis"
                                                    name="surat_baptis" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer position-relative">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="">Mentor</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email" /><input type="submit"
                                value="Subscribe" />
                        </div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1">SiteName</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
