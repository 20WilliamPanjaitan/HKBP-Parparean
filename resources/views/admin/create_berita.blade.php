@extends('admin/side_bar')
@section('title', 'Tambah Berita')
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
                    <a href=berita>Daftar Berita</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Berita</a>
                </li>
            </ol>
        </nav>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Berita</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.berita') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">

                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Ketarangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="keterangan" name="keterangan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control " id="foto" name="foto" required>
                        </div>
                    </div>
                    <input type="text" hidden name="id_parhalado">
                    <div class="form-group row ">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" id="submit" class="btn btn-success">Tambah</button>
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
