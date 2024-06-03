@extends('admin/side_bar')
@section('title', 'Parhalado')
@section('side_bar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Parhalado</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Parhalado</h6>
                            <div style="text-align: right;">
                                <a href="create_parhalado" class="btn btn-success btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama </th>
                                            <th>Tanggal lahir</th>
                                            <th>Sektor</th>
                                            <th>Status</th>
                                            <th>Jabatan</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($parhalado as $item)
                                            
                                        <tr>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->tanggal_lahir}}</td>
                                            <td>{{$item->sektor->nama_sektor}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->jabatan}}</td>
                                            <td><img src="../images/{{$item->foto}}" width="150px" alt=""></td>
                                            <td>
                                                <a href="{{ route('parhalado.edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Edit Data</a>
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