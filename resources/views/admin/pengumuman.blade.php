@extends('admin/side_bar')
@section('title', 'Pengumuman')
@section('side_bar')


@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Tampilkan SweetAlert dengan pesan flash
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
    </script>
    @elseif (session('success_tambah'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Tampilkan SweetAlert dengan pesan flash
        Swal.fire({
            icon: 'success',
            title: 'Success Tambah!',
            text: '{{ session('success_tambah') }}',
        });
    </script>
@endif

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengumuman</h6>
            <div style="text-align: right;">
                <a href="create_pengumuman" class="btn btn-success btn-sm">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>tanggal</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengumuman as $pengumumans)
                        
                        <tr>
                            <td>{{$pengumumans->judul}}</td>
                            <td>{{$pengumumans->tanggal}}</td>
                            <td>{{$pengumumans->keterangan}}</td>
                            <td><img src="../images/{{$pengumumans->foto}}" width="200px" alt=""></td>
                            <td>
                                <a href="{{ route('pengumuman.edit', ['id' => $pengumumans->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
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
