    @extends('header')
    @section('header')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/hkbp.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="100" class="">Tetapi carilah dahulu Kerajaan Allah dan
                    kebenarannya,
                    <br>maka semuanya itu akan ditambahkan kepadamu.</h2>
                <p data-aos="fade-up" data-aos-delay="200">Matius 6:33
                </p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="courses.html" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </section><!-- /Hero Section -->


        <!-- Counts Section -->
        <section id="counts" class="section counts">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-4">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p class="">Jemaat</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p class="">Keluarga</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p class="">Parhalado</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Counts Section -->


        <!-- Courses Section -->
        <section id="courses" class="courses section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita</h2>
                <p class="">Berita Terkini</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    @foreach ($berita as $beritas)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="images/{{$beritas->foto}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <button class="btn btn-primary">Selengkapnya</button>
                                </div>
                                <h3>{{$beritas->judul}}</h3>
                                <p class="description">{{$beritas->keterangan}}</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section><!-- /Courses Section -->

        <div class="container section-title" data-aos="fade-up">
            <h2>Renungan</h2>
            <p class="">Renungan Harian</p>
        </div>


        <!-- Why Us Section -->
        <section id="why-us" class="section why-us">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            @foreach ($renungan as $renungann)
                            <h3>{{$renungann->judul}}</h3>
                            <p>
                                {{$renungann->isi_renungan}}
                            </p>
                            <p>{{$renungann->ayat_renungan}}</p>
                            @endforeach
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-xl-4">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <div class="row"><iframe width="560"
                                            src="https://www.youtube.com/embed/htSruA19Fbc?si=v4gTjAZ6TtU2Gw5U"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                    <h4>Hidup Tanpa Kekhawatiran - Henny Kristianus</h4>
                                    <p>7 April 2024</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <div class="row"><iframe width="560"
                                            src="https://www.youtube.com/embed/htSruA19Fbc?si=v4gTjAZ6TtU2Gw5U"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                    <h4>Hidup Tanpa Kekhawatiran - Henny Kristianus</h4>
                                    <p>7 April 2024</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <div class="row"><iframe width="560"
                                            src="https://www.youtube.com/embed/qhJkJHNQRuI?si=Zv9Bkb66KJ_CxBJH"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                    <h4>Hidup Tanpa Kekhawatiran - Henny Kristianus</h4>
                                    <p>7 April 2024</p>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Why Us Section -->



        <div class="container section-title" data-aos="fade-up">
            <h2>Warta</h2>
            <p class="">Tata Ibadah</p>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Minggu</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ibadah as $ibadahs)
                                        <tr>
                                            <td>{{$ibadahs->nama_ibadah}}</td>
                                            <td class="text-muted">
                                                Kebangkitan Tuhan Yesus Kristus
                                            </td>
                                            <td class="text-muted">
                                                {{$ibadahs->tanggal_ibadah}}
                                            </td>
                                            <td class="text-muted">
                                                Ibadah Minggu
                                            </td>
                                            <td>
                                                <a href="#">Unduh</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- Trainers Index Section -->
        <section id="trainers-index" class="section trainers-index">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            @foreach ($pendeta as $pendetas)
                            <img src="assets/img/{{$pendetas->foto}}" class="img-fluid" alt="">
                            <div class="member-content">

                                <h4>{{$pendetas->nama}}</h4>
                                <span>{{$pendetas->jabatan}}</span>
                                <p>
                                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                    quaerat qui aut
                                    aut aut
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            @foreach ($bibel as $bibels)
                            <img src="assets/img/{{$bibels->foto}}" class="img-fluid" alt="">
                            <div class="member-content">

                                <h4>{{$bibels->nama}}</h4>
                                <span>{{$bibels->jabatan}}</span>
                                <p>
                                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                    quaerat qui aut
                                    aut aut
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            @foreach ($guru as $gurus)
                            <img src="assets/img/{{$gurus->foto}}" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4>{{$gurus->nama}}</h4>
                                <span>{{$gurus->jabatan}}</span>
                                <p>
                                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                    quaerat qui aut
                                    aut aut
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div><!-- End Team Member -->
                </div>

            </div>

            <div class="container">
                <div class="row"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.1064540125058!2d99.15643843881814!3d2.4359661493857603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffd0ab22d421%3A0x284c113abf7724a2!2sHKBP%20Parparean%2C%20Ressort%20Ebenezer%20Parparean!5e0!3m2!1sid!2sid!4v1712480539627!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>

        </section><!-- /Trainers Index Section -->

    </main>

    @endsection
