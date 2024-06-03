@extends('admin/side_bar')
@section('title', 'Tambah Renungan')
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
                    <a href=renungan_harian>Daftar Renungan</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Renungan</a>
                </li>
            </ol>
        </nav>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Renugan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.renungan') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="isi_renungan" class="col-sm-2 col-form-label">Isi Renungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="isi_renungan" name="isi_renungan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ayat_renungan" class="col-sm-2 col-form-label">Ayat Renugan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ayat_renungan" name="ayat_renungan" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="link_vidio" class="col-sm-2 col-form-label">Link Vidio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link_vidio" name="link_vidio" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="kategori" name="kategori" autofocus>
                                <option value="Teks">Teks</option>
                                <option value="Vidio">Vidio</option>
                            </select>       
                        </div>
                    </div>

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
