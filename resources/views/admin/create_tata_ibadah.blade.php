@extends('admin/side_bar')
@section('title', 'Tambah Tata Ibadah')
@section('side_bar')
<!-- Page Heading -->
<main>
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=index>Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a>Tambah Tata Ibadah</a>
                </li>
            </ol>
        </nav>
        <!-- Basic Card Example -->
        <div class="card shadow col-xl-10 col-md-6 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Tata Ibadah</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store.tata_ibadah') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group row">
                        <label for="id_ibadah" class="col-sm-1 col-form-label">Minggu:</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" id="id_ibadah" name="id_ibadah" autofocus>
                                <option value="{{$tata_ibadah->id}}">{{$tata_ibadah->nama_ibadah}}</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-sm-1"></div>

                    <div class="form-group row">
                        <label for="lagu1" class="col-sm-1 col-form-label">Lagu 1 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu1" name="lagu1" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="lagu2" class="col-sm-1 col-form-label">Lagu 2 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu2" name="lagu2" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lagu3" class="col-sm-1 col-form-label">Lagu 3 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu3" name="lagu3" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="lagu4" class="col-sm-1 col-form-label">Lagu 4 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu4" name="lagu4" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lagu5" class="col-sm-1 col-form-label">Lagu 5 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu5" name="lagu5" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="lagu6" class="col-sm-1 col-form-label">Lagu 6 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu6" name="lagu6" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lagu7" class="col-sm-1 col-form-label">Lagu 7 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lagu7" name="lagu7" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="koor1" class="col-sm-1 col-form-label">Koor 1 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="koor1" name="koor1" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="koor2" class="col-sm-1 col-form-label">Koor 2 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="koor2" name="koor2" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="koor3" class="col-sm-1 col-form-label">Koor 3 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="koor3" name="koor3" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="koor4" class="col-sm-1 col-form-label">Koor 4 :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="koor4" name="koor4" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="patik" class="col-sm-1 col-form-label">Patik :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="patik" name="patik" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="epistel" class="col-sm-1 col-form-label">Epistel :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="epistel" name="epistel" required>
                        </div>

                        <div class="col-sm-1"></div>

                        <label for="jamita" class="col-sm-1 col-form-label">Jamita :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jamita" name="jamita" required>
                        </div>
                    </div>

                    <input type="text" hidden name="id_parhalado">
                    <div class="form-group row ">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" id="submit" class="btn btn-success">Tambah Tata Ibadah</button>
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
