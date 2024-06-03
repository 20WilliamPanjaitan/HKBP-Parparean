@extends('admin/side_bar')
@section('title', 'Tambah Parhalado')
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
                    <a href=parhalado>Daftar Parhalado</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Parhalado</a>
                </li>
            </ol>
        </nav>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar parhalado</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.parhalado') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="jabatan" name="jabatan" autofocus>
                                <option value="Sintua">Sintua</option>
                            </select> </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_sektor" class="col-sm-2 col-form-label">Sektor</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="id_sektor" name="id_sektor" autofocus>
                                <option value="1">Sektor 1</option>
                                <option value="2">Sektor 2</option>
                                <option value="3">Sektor 3</option>
                                <option value="4">Sektor 4</option>
                                <option value="5">Sektor 5</option>
                                <option value="6">Sektor 6</option>
                                <option value="7">Sektor 7</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control " id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control " id="foto" name="foto" required>
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
