@extends('admin/side_bar')
@section('title', 'Pranikah')
@section('side_bar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pranikah</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pranikah</h6>
                            <div style="text-align: right;">
                                <a href="#" class="btn btn-success btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pranikah</th>
                                            <th>Ayat Pernikahan</th>
                                            <th>Nama Pendeta</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>Amsal 1 : 7</td>
                                            <td>Royzeky</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>Amsal 1 : 7</td>
                                            <td>Royzeky</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>Amsal 1 : 7</td>
                                            <td>Royzeky</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>Amsal 1 : 7</td>
                                            <td>Royzeky</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>Amsal 1 : 7</td>
                                            <td>Royzeky</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


@endsection