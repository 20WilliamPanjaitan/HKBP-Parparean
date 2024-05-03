@extends('admin/side_bar')
@section('side_bar')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Acara</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Acara</h6>
            <div style="text-align: right;">
                <a href="tambah_acara" class="btn btn-success btn-sm">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Acara</th>
                            <th>Lokasi Acara</th>
                            <th>Jenis Acara</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($acara as $acaras)
                        <tr>
                            <td>{{$acaras->nama_acara}}</td>
                            <td>{{$acaras->lokasi_acara}}</td>
                            <td>{{$acaras->jenis_acara}}</td>
                            <td>{{$acaras->waktu_pelaksanaan}}</td>
                            <td>{{$acaras->keterangan}}</td>
                            <td>
                                <a href="{{route('edit_acara', $acaras)}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#">
                                    <form action="{{route('hapus_acara', $acaras)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
