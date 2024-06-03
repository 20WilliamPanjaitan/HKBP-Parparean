@extends('admin/side_bar')
@section('title', 'Tambah Naposo')
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
                    <a href=naposo>Daftar Naposo</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Naposo</a>
                </li>
            </ol>
        </nav>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Naposo</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.naposo') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="jabatan" name="jabatan" autofocus>
                                <option value="Anggota">Anggota</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil Ketua">Wakil Ketua</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_seksi" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_seksi" name="id_seksi" value="3">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="status" name="status" value="Aktif">
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
