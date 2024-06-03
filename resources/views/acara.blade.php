@extends('header')
@section('title', 'Acara')
@section('header')


<main class="main">

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Acara</h2>
            <p class="">ACARA & KEGIATAN</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <section id="events" class="events section">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        @foreach ($acara as $acaras)
                            
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-img">
                                <img src="images/{{$acaras->foto}}" alt="TelorPaskah" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$acaras->nama_acara}}</h5>
                                    <p class="fst-italic text-center">{{$acaras->lokasi_acara}}</p>
                                    <p class="fst-italic text-center">{{$acaras->jenis_acara}}</p>
                                    <p class="card-text">{{$acaras->keterangan}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </section><!-- /Testimonials Section -->

</main>

@endsection
