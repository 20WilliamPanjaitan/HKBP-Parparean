@extends('header')
@section('header')

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
                        <p class="">DEWAN DIAKONIA</p>
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
                    <h3 class="fw-bold text-center mb-5">Dewan Diakonia
                    </h3>
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
                    <div class="col-lg-4">
                        <h3>Sosial</h3>
                        <ul class="py-5 border-top border-dark" data-aos="fade-right">
                            <li><strong>Pengurus Sosial HKBP Parparean</strong></li>
                            <li>St. D. Br. Napitupulu</li>
                            <li>Gr. Hekson Simbolon</li>
                            <li>St. Lenny Br. Manurung</li>
                        </ul>
                        <p data-aos="fade-right" data-aos-delay="200">buat teks</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                            <div class="col-md-11">
                                <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end"
                                    data-aos="fade-left"
                                    style="background-image: url(assets/img/4.jpeg);--bs-aspect-ratio: 50%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container py-vh-4 w-100 overflow-hidden">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h3>Kemasyarakatan HKBP Parparean</h3>
                    <h3 class="py-5 border-top border-dark" data-aos="fade-right"></h3>
                </div>
                <div class="col-md-7" data-aos="fade-left">
                    <ul class="data-aos" data-aos="fade-left" style="margin-top: 80px;">
                        <p>Pengurus AKemasyarakatan HKBP Parparean</p>
                        <li>St. Jontang Napitupulu</li>
                        <li>St. Arcenius Napitupulu</li>
                        <li>St. M. Siregar</li>
                    </ul>
                    <span>buat teks</span>
                    </blockquote>
                </div>
</main>

@endsection
