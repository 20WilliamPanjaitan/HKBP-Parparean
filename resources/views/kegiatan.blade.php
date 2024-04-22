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
                        <li class="breadcrumbs-item active">Kegiatan</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kegiatan</h2>
                <p class="">Kegiatan Terkini</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <section id="events" class="events section">

                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card">
                                    <div class="card-img">
                                        <style>
                                            .card-img-top {
                                                width: 100%;
                                                height: 300px;
                                                /* Atur tinggi gambar sesuai kebutuhan Anda */
                                                object-fit: cover;
                                                /* Pastikan gambar tetap terlihat baik meskipun diperkecil */
                                            }

                                        </style>
                                        <img src="assets/img/KorRemaja.jpg" alt="Kor" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Kor Remaja Naposo HKBP Parparean</h5>
                                        <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do
                                            eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="assets/img/caritelur.jpg" alt="TelorPaskah" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mencari Telor Paskah</h5>
                                        <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="assets/img/lombacca.jpg" alt="Kor" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Lomba Cerdas Cermat Alkitab</h5>
                                        <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="assets/img/partangiangan.jpeg" alt="Kor" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Partangiangan</h5>
                                        <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /Events Section -->
            </div>
        </section><!-- /Testimonials Section -->

    </main>

@endsection