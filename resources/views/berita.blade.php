@extends('header')
@section('title', 'Berita')
@section('header')

    <main class="main">


        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"
            style="height: 350px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/img/KorRemaja.jpg" alt="Kor" class="card-img-top" style="height: 350px;">
                    <div class="carousel-caption d-none d-md-block" style="color: white;">
                        <h5 style="color: white;">Kor NHKBP Parparean</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/img/caritelur.jpg" alt="TelorPaskah" class="card-img-top" style="height: 350px;">
                    <div class="carousel-caption d-none d-md-block" style="color: white;">
                        <h5 style="color: white;">Mencari Telor Paskah</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/lombacca.jpg" alt="Kor" class="card-img-top" style="height: 350px;">
                    <div class="carousel-caption d-none d-md-block" style="color: white;">
                        <h5 style="color: white;">Lomba Cerdas Cermat Alkitab</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title" data-aos="fade-up">
                            <p class="" style="font-size: 22px;">Pengumuman</p>
                        </div><!-- End Section Title -->
                        <div class="swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <style>
                                    .swiper-wrapper .card {
                                        margin-right: 15px;
                                        /* Anda dapat menyesuaikan nilai sesuai dengan kebutuhan Anda */
                                    }

                                    .card-img-top {
                                        width: 100%;
                                        height: 200px;
                                        /* Atur tinggi gambar sesuai kebutuhan Anda */
                                        object-fit: cover;
                                        /* Pastikan gambar tetap terlihat baik meskipun diperkecil */
                                    }

                                </style>
                                @foreach ($berita as $item)
                                    
                                <div class="card" style="width: 18rem;">
                                    <img src="images/{{$item->foto}}" class="card-img-top" alt="Pernikahan">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->judul}}</h5>
                                        <p class="card-text">{{$item->keterangan}}</p>
                                        {{-- <a href="Pengumuman.html" class="btn btn-primary">Selengkapnya</a> --}}
                                    </div>
                                </div><!-- End testimonial item -->
                                @endforeach

                                
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-title" data-aos="fade-up">
                            <p class="" style="font-size: 22px;">Jadwal Ibadah</p>
                        </div><!-- End Section Title -->
                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <style>
                                /* Tambahkan gaya CSS sesuai kebutuhan Anda */
                                .table {
                                    width: 100%;
                                    border-collapse: collapse;
                                }

                                .table th,
                                .table td {
                                    border: 1px solid black;
                                    padding: 8px;
                                    text-align: center;
                                }

                                .table-dark th {
                                    background-color: #343a40;
                                    color: white;
                                    text-align: center;
                                }

                            </style>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Parmingguon</th>
                                        <th>Tanggal/Hari</th>
                                        <th>Jam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dakdanak</td>
                                        <td>Minggu, 31 Maret 2024</td>
                                        <td>08:00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ina/Ama</td>
                                        <td>Minggu, 31 Maret 2024</td>
                                        <td>10:00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Remaja</td>
                                        <td>Minggu, 31 Maret 2024</td>
                                        <td>17:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->

    </main>

    @endsection
