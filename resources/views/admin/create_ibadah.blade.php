@extends('admin/side_bar')
@section('title', 'Tambah Ibadah')
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
                    <a href=beranda>Daftar Ibadah</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Ibadah</a>
                </li>
            </ol>
        </nav>
        <div class="alert alert-warning " role="alert">
            <i class="fa fa-info-circle"></i>
            Tambah data ibadah terlebih dahulu untuk membuat Tata Ibadah
        </div>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Ibadah</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.ibadah') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_ibadah" class="col-sm-2 col-form-label">Nama Ibadah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibadah" name="nama_ibadah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_ibadah" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_ibadah" name="tanggal_ibadah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengkotbah" class="col-sm-2 col-form-label">Pengkotbah</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="pengkotbah" name="pengkotbah" autofocus>
                                <option value="Pdt. Anggiat Simanjuntak S.Th">Pdt. Anggiat Simanjuntak S.Th</option>
                                <option value="Biv. Lastriana Lumban Gaol">Biv. Lastriana Lumban Gaol</option>
                                <option value="Gr. Hekson Simbolon">Gr. Hekson Simbolon</option>
                            </select>
                        </div>
                    </div>

                    <input type="text" hidden name="id_parhalado">
                    <div class="form-group row ">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" id="submit" class="btn btn-success" >Tambah Data Ibadah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- End of Main Content -->


</div>
@endsection
