@extends('admin/side_bar')
@section('side_bar')


                    <!-- Page Heading -->
                    <main>
                        <div class="container-fluid">
                            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href=index>Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href=acara>Daftar Acara</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a>Tambah Acara</a>
                                    </li>
                                </ol>
                            </nav>
                            <!-- Basic Card Example -->
                            <div class="card shadow col-xl-10 col-md-6 mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Acara</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="nama_acara" class="col-sm-2 col-form-label">Nama Acara</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="id_acara" id="id_acara">
                                                <input type="hidden" name="id_parhalado" id="id_parhalado">
                                                <input type="text" class="form-control" id="nama_acara"
                                                    name="nama_acara" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi_acara" class="col-sm-2 col-form-label">Lokasi Acara</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control " id="lokasi_acara"
                                                    name="lokasi_acara" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_acara" class="col-sm-2 col-form-label">Jenis Acara</label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-control" id="jenis_acara"
                                                    name="jenis_acara" autofocus>
                                                    <option>Ibadah</option>
                                                    <option>Amal</option>
                                                    <option>Rapat</option>
                                                    <option>Kegiatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="waktu_pelaksanaan" class="col-sm-2 col-form-label">Waktu</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control " id="waktu_pelaksanaan" 
                                                    name="waktu_pelaksanaan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control " id="keterangan" name="keterangan"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto" class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="foto"
                                                    name="foto">
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <div class="col-sm-10">
                                                <button type="submit" name="submit" id="submit"
                                                    class="btn btn-success">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <!-- End of Main Content -->


        </div>

        @endsection
