@extends('header')
@section('header')


<main>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s"
                                src="assets/img/gereja1.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s"
                                src="assets/img/gereja2..jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s"
                                src="assets/img/gereja3.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s"
                                src="assets/img/gereja4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Sejarah </p>
                        <h3 class="fw-bold mb-5">Gereja HKBP Parparean</h3>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/about-5.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <p>Gereja HKBP Parparean memiliki sejarah yang kaya dan berakar dalam perjalanan panjang
                                iman dan pengabdian. Berdiri di tengah-tengah masyarakat Batak, gereja ini telah menjadi
                                landasan keagamaan bagi banyak generasi. Sejarahnya yang dimulai dari zaman penjajahan
                                Belanda hingga era modern menandai perjalanan gereja ini dalam melayani dan memperkuat
                                iman jemaatnya. Dengan tekad yang kokoh dan semangat pelayanan yang tulus, Gereja HKBP
                                Parparean terus menerus berkembang sebagai pusat rohani dan tempat pertemuan yang
                                mempersatukan umat dalam kepercayaan dan pengharapan. </p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <p class="mb-0">"Dalam perjalanan panjang kami sebagai komunitas iman, kami telah diberkati
                                dengan warisan yang kaya akan pengabdian, pengorbanan, dan keberanian dari
                                generasi-generasi sebelum kami. Sejarah gereja kami adalah bukti cinta Allah yang terus
                                mengalir melalui zaman, menginspirasi kami untuk meneruskan misi-Nya dengan penuh
                                semangat dan keberanian. Mari kita bersama-sama merenungkan warisan ini dengan rendah
                                hati, mengambil inspirasi dari mereka yang telah berjalan di jalan iman sebelum kita,
                                sambil menjaga api iman kami tetap menyala dalam setiap langkah yang kami ambil."</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/about-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!--Visi Misi Start-->
    <div class="container-fluid my-5 d-flex justify-content-center align-items-center"
        style="background-color: #83aaed;">
        <div class="py-5 text-center">
            <h3 class="fw-bold text-center mb-5"> Visi Misi Gereja HKBP Parparean</h3>
            <div class="row justify-content-around">
                <div class="col-6" data-aos="fade-right">
                    <h3 style="text-align: center;">Visi</h3>
                    <hr style="border-top: 2px solid black; width: 50%; margin: auto;">
                    <ul class="list-unstyled" style="text-align: left;">
                        <li><i class="fas fa-circle"></i> Menjadi gereja yang melayani dengan kasih dan rendah hati</li>
                        <li><i class="fas fa-circle"></i> Memperlengkapi setiap anggota jemaat untuk melayani sesama
                        </li>
                        <li><i class="fas fa-circle"></i> Menjadi tempat berkumpulnya umat yang penuh dengan sukacita
                        </li>
                        <li><i class="fas fa-circle"></i> Memperluas pengaruh injil di wilayah sekitar</li>
                        <li><i class="fas fa-circle"></i> Menghasilkan murid-murid Kristus yang matang dalam iman</li>
                    </ul>
                </div>
                <div class="col-6" data-aos="fade-left">
                    <h3 style="text-align: center;">Misi</h3>
                    <hr style="border-top: 2px solid black; width: 50%; margin: auto;">
                    <ul class="list-unstyled" style="text-align: left;">
                        <li><i class="fas fa-circle"></i> Membangun hubungan yang kuat dengan Tuhan melalui doa dan
                            firman</li>
                        <li><i class="fas fa-circle"></i> Membantu mereka yang membutuhkan di dalam dan di luar gereja
                        </li>
                        <li><i class="fas fa-circle"></i> Menjangkau masyarakat sekitar dengan program sosial</li>
                        <li><i class="fas fa-circle"></i> Mendukung pembangunan gereja untuk pertumbuhan rohani</li>
                        <li><i class="fas fa-circle"></i> Membimbing anggota jemaat untuk hidup sesuai dengan ajaran
                            Yesus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Visi Misi end-->

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>


    <section id="trainers-index" class="section trainers-index">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                        <div class="member-content">
                            <h4>Pdt. Anggiat Simanjuntak S.Th</h4>
                            <span>Pendeta Gereja HKBP Parparean</span>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="" />
                        <div class="member-content">
                            <h4>Biv. Lastriana Lumban Gaol</h4>
                            <span>Bibelvrow HKBP Parparean</span>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="" />
                        <div class="member-content">
                            <h4>Gr. Hekson Simbolon</h4>
                            <span>Guru Huria HKBP Parparean</span>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

                <!-- /Tentang Section -->
</main>



@endsection
