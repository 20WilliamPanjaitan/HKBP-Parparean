@extends('header')
@section('title', 'Jemaat Baru')
@section('header')


<main id="main">
    <section id="layanan" class="layanan section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan</h2>
            <p class="text1">Pendaftaran Jemaat Baru HKBP Parparean</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <form action="{{ route('store.jemaat_baru') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama_jemaat">Nama:</label>
                                <input type="text" class="form-control" id="nama_jemaat" name="nama_jemaat"
                                    placeholder="Masukkan Nama" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select class="form-select form-control" id="jenis_kelamin" name="jenis_kelamin" autofocus>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="kategori_jemaat">Kategori:</label>
                                <select class="form-select form-control" id="kategori_jemaat" name="kategori_jemaat" autofocus>
                                    <option value="Ama">Ama</option>
                                    <option value="Ina">Ina</option>
                                    <option value="Naposo">Naposo</option>
                                    <option value="Remaja">Remaja</option>
                                    <option value="Lansia">Lansia</option>
                                    <option value="Sekolah Minggu">Sekolah Minggu</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama">Tmp/Tgl Lahir</label>
                                <div class="row">
                                    <div class="col-md-6"><input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            placeholder="Tempat lahir" required /></div>
                                    <div class="col-md-6"><input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            required /></div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Masukkan Alamat" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_telepon">Nomor Telepon:</label>
                                <input type="tel" class="form-control" id="no_telepon" name="no_telepon"
                                    placeholder="Nomor HP (ex:0822xxxxxxxx)" required />
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="file_babtis">Surat Babtis:</label>
                                <input type="file" class="form-control" id="file_babtis" name="file_babtis"  />
                            </div>
                            
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
