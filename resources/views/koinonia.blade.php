@extends('header')
@section('title', 'Koinonia')
@section('header')

<body data-bs-spy="scroll" data-bs-target="#navScroll">

    <main>
        <div class="w-100 overflow-hidden bg-gray-100" id="top">

            <div class="container position-relative">
                <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
                    style="background-image: url(img/webp/interior11.webp);">

                </div>
                <div class="row">

                    <section>
                        <div class="container section-title" data-aos="fade-up">
                            <h2>dewan</h2>
                            <p class="">KOINONIA</p>
                        </div>
                    </section>

                </div>
            </div>

        </div>

        <div class="py-vh-5 w-100 overflow-hidden" id="services">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <!-- Mengubah justify-content-end menjadi justify-content-center -->
                    <div class="col-lg-8" data-aos="fade-down">
                        <h3 class="fw-bold text-center mb-5">Pengurus Harian
                        </h3>
                        <!-- Mengubah display-6 menjadi display-1 dan menambahkan kelas mb-5 untuk memberikan margin bottom -->
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-12 text-center mb-4">
                            <img src="images/team-5.jpg" alt="Deskripsi Gambar" width="250"
                                style="margin-bottom: 20px;"> <!-- Menambahkan margin-bottom pada gambar -->
                            <h5 class="py-3 border-top border-dark">Pdt. Anggiat Simanjuntak S.Th</h5>
                            <p> Pendeta Gereja HKBP Parparean</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-12 text-center mb-4">
                            <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
                            <img src="images/team-6.jpg" alt="Deskripsi Gambar" width="250"
                                style="margin-bottom: 20px;">
                            <h5 class="py-3 border-top border-dark">Biv. Lastriana Lumban Gaol </h5>
                            <!-- Mengubah kelas py-5 menjadi py-3 untuk memberikan margin atas dan bawah yang lebih kecil -->
                            <p>Bibelvrow HKBP Parparean</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-12 text-center mb-4">
                            <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
                            <img src="images/testimonials-1.jpg" alt="Deskripsi Gambar" width="250"
                                style="margin-bottom: 20px;">
                            <h5 class="py-3 border-top border-dark">Gr. Hekson Simbolon</h5>
                            <!-- Mengubah kelas py-5 menjadi py-3 untuk memberikan margin atas dan bawah yang lebih kecil -->
                            <p> Guru Huria HKBP Parparean</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>



        {{-- SEKOLAH MINGGU --}}
        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3>Sekolah Minggu</h3>
                        <ul class="py-3 border-top border-dark" data-aos="fade-right">
                            <p><b>Pengurus Sekolah Minggu HKBP Parparean</b></p>
                            @foreach ($sekolah_minggu as $item)
                            <li>{{$item->nama}} ({{$item->jabatan}})</li>
                            @endforeach

                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">
                            <p><b>Kegiatan sekolah_minggu HKBP Parparean</b></p>
                            @foreach ($sekolah_minggu_kegiatan as $item)
                            <li data-aos="fade-left" data-aos-delay="200">
                                {{$item->keterangan}}
                            </li>
                            @endforeach
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gx-5 d-flex ">
                            @foreach ($foto_sekolah_minggu as $item)
                                    
                            <div class="ratio ratio-16x9 shadow-lg">
                                <img src="images/{{$item->foto}}" class="img-fluid rounded " alt="">
                            </div>
                            @endforeach
                            
                        </div>
                    </div>

                </div>
            </div>
        </div><br><br>


        {{-- REMAJA --}}
        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">

                    <div class="col-lg-7">
                        <div class="row gx-5 d-flex ">
                            <div class="col-md-12">
                                @foreach ($foto_remaja as $item)
                                    
                                <div class="ratio ratio-16x9 shadow-lg">
                                    <img src="images/{{$item->foto}}" class="img-fluid rounded " alt="">
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h3>Remaja</h3>
                        <ul class="py-3 border-top border-dark" data-aos="fade-right">
                            <p><b>Pengurus Remaja HKBP Parparean</b></p>
                            @foreach ($remaja as $item)
                            <li>{{$item->nama}} ({{$item->jabatan}})</li>
                            @endforeach

                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">
                            <p><b>Kegiatan Sekolah Minggu HKBP Parparean</b></p>
                            @foreach ($remaja_kegiatan as $item)
                            <li data-aos="fade-left" data-aos-delay="200">
                                {{$item->keterangan}}
                            </li>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div><br><br>



        {{-- NAPOSO --}}
        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3>Naposo</h3>
                        <ul class="py-3 border-top border-dark" data-aos="fade-right">
                            <p><b>Pengurus Naposo HKBP Parparean</b></p>
                            @foreach ($naposo as $item)
                            <li>{{$item->nama}} ({{$item->jabatan}})</li>
                            @endforeach

                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">
                            <p><b>Kegiatan Naposo HKBP Parparean</b></p>
                            @foreach ($naposo_kegiatan as $item)
                            <li data-aos="fade-left" data-aos-delay="200">
                                {{$item->keterangan}}
                            </li>
                            @endforeach
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gx-5 d-flex ">
                            <div class="col-md-12">
                                @foreach ($foto_naposo as $item)
                                <div class="ratio ratio-16x9 shadow-lg">
                                    <img src="images/{{$item->foto}}" class="img-fluid rounded " alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>


        {{-- AMA --}}
        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">

                    <div class="col-lg-7">
                        <div class="row gx-5 d-flex ">
                            <div class="col-md-12 ">
                                @foreach ($foto_ama as $item)
                                <div class="ratio ratio-16x9 shadow-lg">
                                    <img src="images/{{$item->foto}}" class="img-fluid rounded " alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h3>Ama</h3>
                        <ul class="py-3 border-top border-dark" data-aos="fade-right">
                            <p><b>Pengurus Ama HKBP Parparean</b></p>
                            @foreach ($ama as $item)
                            <li>{{$item->nama}} ({{$item->jabatan}})</li>
                            @endforeach

                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">
                            <p><b>Kegiatan Ama HKBP Parparean</b></p>
                            @foreach ($ama_kegiatan as $item)
                            <li data-aos="fade-left" data-aos-delay="200">
                                {{$item->keterangan}}
                            </li>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div><br><br>

        {{-- PAROMPUAN --}}
        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3>Parompuan</h3>
                        <ul class="py-3 border-top border-dark" data-aos="fade-right">
                            <p><b>Pengurus Parompuan HKBP Parparean</b></p>
                            @foreach ($parompuan as $item)
                            <li>{{$item->nama}} ({{$item->jabatan}})</li>
                            @endforeach

                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">
                            <p><b>Kegiatan Parompuan HKBP Parparean</b></p>
                            @foreach ($parompuan_kegiatan as $item)
                            <li data-aos="fade-left" data-aos-delay="200">
                                {{$item->keterangan}}
                            </li>
                            @endforeach
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row gx-5 d-flex ">
                            <div class="col-md-12 ">
                                @foreach ($foto_parompuan as $item)
                                <div class="ratio ratio-16x9 shadow-lg">
                                    <img src="images/{{$item->foto}}" class="img-fluid rounded " alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

        @endsection
