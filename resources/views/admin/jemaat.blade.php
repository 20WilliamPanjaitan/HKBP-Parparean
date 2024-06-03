@extends('admin/side_bar')
@section('title', 'Jemaat')
@section('side_bar')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jemaat</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Jemaat</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Jemaat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat/Tanngal Lahir</th>
                            <th>Alamat</th>
                            <th>Kategori</th>
                            <th>No HP</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jemaat as $item)
                        <tr>
                            <td>{{$item->nama_jemaat}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->tempat_lahir}}/{{$item->tanggal_lahir}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->kategori_jemaat}}</td>
                            <td>{{$item->no_telepon}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>{{$item->status}}</td>

                            <td>
                                <a href="{{ route('jemaat.edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Edit Data</a>
                                {{-- <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#detailModal">Detail</a> --}}
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
<!-- Detail Modal-->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Jemaat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>William</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">OK</button>


            </div>
        </div>
    </div>
</div>

@endsection
