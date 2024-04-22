@extends('header')
@section('header')


    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="breadcrumbs">
                    <ol class="breadcrumbs">
                        <li class="breadcrumbs-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumbs-item"><a href="Berita.html">Berita</a></li>
                        <li class="breadcrumbs-item active">Pengumuman</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengumuman</h2>
                <p class="">Pengumuman Minggu Ini</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <style>
                    .card-img-top {
                        width: 100%;
                        height: 240px;
                        /* Atur tinggi gambar sesuai kebutuhan Anda */
                        object-fit: cover;
                        /* Pastikan gambar tetap terlihat baik meskipun diperkecil */
                    }

                </style>
                <div class="swiper">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/Pranikah.jpg" class="card-img-top" alt="Pranikah">
                                <div class="card-body">
                                    <h5 class="card-title">Pranikah</h5>
                                    <p class="card-text">Jika jemaat ingin mendaftar pranikah silahkan mendaftar pada
                                        fitur layanan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/pernikahan.jpeg" class="card-img-top" alt="pernikahan">
                                <div class="card-body">
                                    <h5 class="card-title">Pernikahan</h5>
                                    <p class="card-text">Jika jemaat ingin mendaftar pernikahan silahkan mendaftar pada
                                        fitur layanan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/tardidi.jpg" class="card-img-top" alt="tardidi">
                                <div class="card-body">
                                    <h5 class="card-title">Tardidi</h5>
                                    <p class="card-text">Dibuka pendaftaran untuk tardidi, pendaftaran dibuka dari
                                        tanggal 1 september
                                        sampai 30 september.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/Sidi.jpg" class="card-img-top" alt="Sidi">
                                <div class="card-body">
                                    <h5 class="card-title">Naik Sidi</h5>
                                    <p class="card-text">Dibuka pendaftaran untuk tardidi, pendaftaran dibuka dari
                                        tanggal 1 Desember
                                        sampai 30 Desember.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
            </div>
        </section><!-- /Testimonials Section -->

    </main>

@endsection