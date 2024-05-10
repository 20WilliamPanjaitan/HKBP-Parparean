@extends('header')
@section('header')

{{-- <style>
    /* inter-300 - latin */
    @font-face {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local(''),
            url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
            /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('./fonts/inter-v12-latin-300.woff') format('woff');
        /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local(''),
            url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
            /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('./fonts/inter-v12-latin-500.woff') format('woff');
        /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local(''),
            url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
            /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('./fonts/inter-v12-latin-700.woff') format('woff');
        /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

</style>

</head> --}}

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
                        <h3 class="fw-bold text-center mb-5">Dewan Koinonia</h3>
                        <!-- Mengubah display-6 menjadi display-1 dan menambahkan kelas mb-5 untuk memberikan margin bottom -->
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 text-center mb-4">
                                <img src="assets/img/examplr.jpeg" alt="Deskripsi Gambar" width="150" height="150"
                                    style="margin-bottom: 20px;"> <!-- Menambahkan margin-bottom pada gambar -->
                                <h3 class="py-3 border-top border-dark">Pdt. Anggiat Simanjuntak S.Th</h3>
                                <p> Pendeta Gereja HKBP Parparean</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 text-center mb-4">
                                <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
                                <img src="assets/img/examplr.jpeg" alt="Deskripsi Gambar" width="150" height="150"
                                    style="margin-bottom: 20px;">
                                <h3 class="py-3 border-top border-dark">Biv. Lastriana Lumban Gaol </h3>
                                <!-- Mengubah kelas py-5 menjadi py-3 untuk memberikan margin atas dan bawah yang lebih kecil -->
                                <p>Bibelvrow HKBP Parparean</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 text-center mb-4">
                                <!-- Menambahkan kelas mb-4 untuk memberikan margin bottom -->
                                <img src="assets/img/examplr.jpeg" alt="Deskripsi Gambar" width="150" height="150"
                                    style="margin-bottom: 20px;">
                                <h3 class="py-3 border-top border-dark">Gr. Hekson Simbolon</h3>
                                <!-- Mengubah kelas py-5 menjadi py-3 untuk memberikan margin atas dan bawah yang lebih kecil -->
                                <p> Guru Huria HKBP Parparean</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
                <div class="container">

                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="row gx-5 d-flex">
                                <div class="col-md-11">
                                    <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end"
                                        data-aos="fade-right"
                                        style="background-image: url(assets/img/4.jpeg);--bs-aspect-ratio: 50%;">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end"
                                        data-aos="fade-up" style="background-image: url(assets/img/5.webp);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center"
                                        data-aos="fade-left"
                                        style="background-image: url(assets/img/6.jpeg);--bs-aspect-ratio: 150%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3>Sekolah Minggu</h3>
                            <ul class="py-5 border-top border-dark" data-aos="fade-left">
                                <!-- Mengubah tag p menjadi ul untuk membuat daftar poin -->
                                <p>Pengurus Sekolah Minggu HKBP Parparean</p>
                                <li>St. D. Br. Napitupulu</li><!-- Menggunakan tag li untuk setiap item daftar -->
                                <li>Gr. Hekson Simbolon</li>
                                <li>St. Lenny Br. Manurung</li>
                            </ul>
                            <p data-aos="fade-left" data-aos-delay="200">Selamat datang di Sekolah Minggu HKBP
                                Parparean! Di sini,
                                setiap hari adalah petualangan iman untuk anak-anak. Dengan ceria dan semangat, kami
                                mengajak mereka
                                untuk menjelajahi kekayaan ajaran agama Kristen dalam suasana belajar yang menyenangkan.
                                Bersama kami,
                                mereka tidak hanya belajar, tapi juga tumbuh dalam iman dan keceriaan.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="py-vh-5 w-100 overflow-hidden" id="numbers">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <h3>Remaja Naposo </h3>
                            <h3 class="py-3 border-top border-dark" data-aos="fade-right"></h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6" data-aos="fade-up" style="margin-top: 80px;">
                                    <div class=" fw-bold py-4">Remaja</div>
                                    <ul class data-aos="fade-left">
                                        <!-- Mengubah tag p menjadi ul untuk membuat daftar poin -->
                                        <p>Pengurus remaja HKBP Parparean</p>
                                        <!-- Menggunakan tag li untuk setiap item daftar -->
                                        <li>Gr. Hekson Simbolon</li>
                                        <li>Biv. Lastriana Lumban Gaol</li>
                                        <li>St. B. Napitupulu</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" style="margin-top: 80px;">
                                    <div class=" fw-bold py-4">Naposo Bulung</div>
                                    <ul class data-aos="fade-left">
                                        <!-- Mengubah tag p menjadi ul untuk membuat daftar poin -->
                                        <p>Pengurus Naposo HKBP Parparean</p>
                                        <!-- Menggunakan tag li untuk setiap item daftar -->
                                        <li>St. Longgak Simatupang</li>
                                        <li>Pdt. Anggiat Simanjuntak S.Th</li>
                                        <li>St. M. Panjaitan</li>
                                </div>
                            </div>
                        </div>

                        <div class="container py-vh-4 w-100 overflow-hidden">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-5">
                                    <h3>Ama HKBP Parparean</h3>
                                    <h3 class="py-5 border-top border-dark" data-aos="fade-right"></h3>
                                </div>
                                <div class="col-md-7" data-aos="fade-left">
                                    <ul class="data-aos" data-aos="fade-left" style="margin-top: 80px;">
                                        <p>Pengurus Ama HKBP Parparean</p>
                                        <li>St. Jontang Napitupulu</li>
                                        <li>St. Arcenius Napitupulu</li>
                                        <li>St. M. Siregar</li>
                                    </ul>
                                    <span>Dalam lingkungan gerejawi HKBP Parparean, remaja memiliki peran yang sangat
                                        penting dalam
                                        membangun komunitas yang dinamis dan bersemangat. Dari aktifitas-aktifitas
                                        keagamaan hingga
                                        kegiatan sosial, remaja HKBP Parparean menonjol dengan semangat mereka yang
                                        kreatif dan antusias.
                                        Mereka tidak hanya menjadi pewaris nilai-nilai keagamaan yang kuat, tetapi juga
                                        menjadi agen
                                        perubahan yang positif dalam lingkungan mereka, mendorong inovasi dan kolaborasi
                                        untuk mewujudkan
                                        visi bersama dalam membangun masa depan yang lebih cerah.</span>
                                    </blockquote>
                                </div>

                                <div class="container py-vh-4 w-100 overflow-hidden">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-lg-5">
                                            <h3>Parompuan HKBP Parparean</h3>
                                            <h3 class="py-5 border-top border-dark" data-aos="fade-right"></h3>
                                        </div>
                                        <div class="col-md-7" data-aos="fade-left">
                                            <ul class="data-aos" data-aos="fade-left" style="margin-top: 80px;">
                                                <p>Pengurus Parompuan HKBP Parparean</p>
                                                <li>St. Rosmiati Br. Sinaga</li>
                                                <li>Cst. M. Br. Marpaung</li>
                                                <li>Cst. R. Br. Manalu</li>
                                            </ul>

                                            <span>Dalam lingkungan gerejawi HKBP Parparean, remaja memiliki peran yang
                                                sangat penting dalam
                                                membangun komunitas yang dinamis dan bersemangat. Dari
                                                aktifitas-aktifitas keagamaan hingga
                                                kegiatan sosial, remaja HKBP Parparean menonjol dengan semangat mereka
                                                yang kreatif dan
                                                antusias. Mereka tidak hanya menjadi pewaris nilai-nilai keagamaan yang
                                                kuat, tetapi juga
                                                menjadi agen perubahan yang positif dalam lingkungan mereka, mendorong
                                                inovasi dan kolaborasi
                                                untuk mewujudkan visi bersama dalam membangun masa depan yang lebih
                                                cerah.</span>
                                            </blockquote>
                                        </div>

                                        <div class="position-relative overflow-hidden w-100 bg-light" id="gallery">
                                            <div class="container-fluid">
                                                <div class="row overflow-scroll">
                                                    <div class="col-12">
                                                        <div
                                                            class="row vw-100 px-0 py-vh-5 d-flex align-items-center scrollx">
                                                            <div class="col-md-2" data-aos="fade-up">
                                                                <img src="img/webp/interior37.webp"
                                                                    class="rounded shadow img-fluid"
                                                                    alt="nice gallery image" width="512" height="341">
                                                            </div>

                                                            <div class="col-md-2" data-aos="fade-up"
                                                                data-aos-delay="200">
                                                                <img src="img/webp/people1.webp"
                                                                    class="img-fluid rounded shadow"
                                                                    alt="nice gallery image" width="1164" height="776">
                                                            </div>

                                                            <div class="col-md-3" data-aos="fade-up"
                                                                data-aos-delay="400">
                                                                <img src="img/webp/people2.webp"
                                                                    class="img-fluid rounded shadow"
                                                                    alt="nice gallery image" width="844" height="1054">
                                                            </div>

                                                            <div class="col-md-3" data-aos="fade-up"
                                                                data-aos-delay="600">
                                                                <img src="img/webp/interior29.webp"
                                                                    class="img-fluid rounded shadow"
                                                                    alt="nice gallery image" width="844" height="562">
                                                            </div>

                                                            <div class="col-md-2" data-aos="fade-up"
                                                                data-aos-delay="800">
                                                                <img src="img/webp/people23.webp"
                                                                    class="rounded shadow img-fluid"
                                                                    alt="nice gallery image" width="512" height="341">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        @endsection
