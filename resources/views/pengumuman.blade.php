@extends('header')
@section('title', 'Pengumuman')
@section('header')


    <main class="main">


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengumuman</h2>
                <p class="">Pengumuman </p>
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
                        @foreach ($pengumuman as $pengumumans)
                            
                        <div class="col">
                            <div class="card">
                                <img src="images/{{$pengumumans->foto}}" class="card-img-top" alt="Pranikah">
                                <div class="card-body">
                                    <h5 class="card-title">{{$pengumumans->judul}}</h5>
                                    <p class="card-text">J{{$pengumumans->keterangan}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div><!-- End testimonial item -->
            </div>
        </section><!-- /Testimonials Section -->

    </main>

@endsection