@extends('admin/side_bar')
@section('side_bar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pindah Jemaat</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pindah Jemaat</h6>
                            <div style="text-align: right;">
                                <a href="#" class="btn btn-success btn-sm">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pindah</th>
                                            <th>Gereja Tujuan</th>
                                            <th>Keterangan</th>
                                            <th>File Surat Pindah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>HKBP Balige</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>File Surat Pindah</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>HKBP Balige</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>File Surat Pindah</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>HKBP Balige</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>File Surat Pindah</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>HKBP Balige</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>File Surat Pindah</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Minggu/28 April 2024</td>
                                            <td>HKBP Balige</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe
                                                natus, quasi nulla tempore adipisci </td>
                                            <td>File Surat Pindah</td>
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