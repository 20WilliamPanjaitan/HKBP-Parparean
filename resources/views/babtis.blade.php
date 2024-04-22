@extends('header')
@section('header')


    <main id="main">
        <section id="layanan" class="layanan section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p class="text1">Pendaftaran Tardidi HKBP Parparean</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <form action="#" method="post">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama/Keluarga:</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="wijk">Wijk:</label>
                                    <input type="text" class="form-control" id="wijk" name="wijk"
                                        placeholder="Masukkan Wijk" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nomor_kontak">Nomor Kontak:</label>
                                    <input type="tel" class="form-control" id="nomor_kontak" name="nomor_kontak"
                                        placeholder="Nomor HP (ex:0822xxxxxxxx)" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Masukkan Alamat" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="mail">Mail:</label>
                                    <input type="email" class="form-control" id="mail" name="mail"
                                        placeholder="Email (ex:hkbpparparean@gmail.com)" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="info">Anggota Keluarga Yang Akan Tardidi(Nama/Gender/Tanggal
                                        Lahir):</label>
                                    <textarea class="form-control" id="info" name="info" rows="5"
                                        placeholder="(ex:RoyZeky Aritonang/Pria/30 Desember 2003)" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection