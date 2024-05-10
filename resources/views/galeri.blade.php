@extends('header')
@section('header')

<main class="main">

    <!-- Page Title -->
    <div id="HKBP Parparean" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slide1.jpg" class="d-block w-100" alt=" ">
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide2.jpg" class="d-block w-100" alt=" ">
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide3.jpg" class="d-block w-100" alt=" ">
            </div>
        </div>
    </div>

    <!-- Events Section -->
    <section id="events" class="events section">

        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($galeri as $galeris)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="../images/{{$galeris->foto}}" alt="..." width="400px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$galeris->judul}}  </h5>
                            <p class="fst-italic text-center">{{$galeris->keterangan}}</p>
                            <p class="fst-italic text-center">{{$galeris->tanggal}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>

        </div>

    </section><!-- /Events Section -->

</main>

@endsection
