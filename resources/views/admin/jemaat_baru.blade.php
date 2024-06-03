@extends('admin/side_bar')
@section('title', 'Jemaat Baru')
@section('side_bar')


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Request Jemaat Baru</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Request Jemaat Baru</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>No Telepon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jemaat as $item)

                        <tr>
                            <td>{{$item->nama_jemaat}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->kategori_jemaat}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->tempat_lahir}}/{{$item->tanggal_lahir}}</td>
                            <td>{{$item->no_telepon}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <!-- Setuju Button -->
                                <form action="{{ route('request.approve', $item->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#setujuModal-{{ $item->id }}">Setuju</button>

                                    <!-- Setuju Modal-->
                                    <div class="modal fade" id="setujuModal-{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menerima
                                                        Permohonan</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Pilih "Setuju" di bawah ini jika Anda yakin
                                                    untuk Menyetujui permohonan pendaftaran
                                                    jemaat baru
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Setuju</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Tolak Button -->
                                <form action="{{ route('request.reject', $item->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#tolakModal-{{ $item->id }}">Tolak</button>

                                    <!-- Tolak Modal-->
                                    <div class="modal fade" id="tolakModal-{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menolak
                                                        Permohonan</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Pilih "Tolak" di bawah ini jika Anda yakin untuk
                                                    menolak permohonan pendaftaran
                                                    jemaat baru
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
{{-- <!-- tolak Modal-->
<div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menolak Permohonan</h5>
                <form action="">
                    <input type="hidden" value="Aktif">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
            </div>
            <div class="modal-body">Pilih "Tolak" di bawah ini jika Anda yakin untuk menolak permohonan pendaftaran
                jemaat baru
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                <a class="btn btn-danger" href="">Tolak</a>
            </div>
        </div>
    </div>
</div>


<!-- Setuju Modal-->
<div class="modal fade" id="setujuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menerima Permohonan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Setuju" di bawah ini jika Anda yakin untuk Menyetujui permohonan pendaftaran
                jemaat baru
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                <a class="btn btn-success" href="">Setuju</a>
            </div>
        </div>
    </div>
</div> --}}

@endsection
