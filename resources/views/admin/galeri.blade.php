@extends('admin/side_bar')
@section('title', 'Galeri')
@section('side_bar')


@if(session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Tampilkan SweetAlert dengan pesan flash
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('
        success ') }}',
    });

</script>
@elseif (session('success_tambah'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Tampilkan SweetAlert dengan pesan flash
    Swal.fire({
        icon: 'success',
        title: 'Success Tambah!',
        text: '{{ session('
        success_tambah ') }}',
    });

</script>
@endif

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Galery</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Galery</h6>
            <div style="text-align: right;">
                <a href="create_galeri" class="btn btn-success btn-sm">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $galeris)

                        <tr>
                            <td>{{$galeris->judul}}</td>
                            <td>{{$galeris->status}}</td>
                            <td>{{$galeris->keterangan}}</td>
                            <td><img src="../images/{{$galeris->foto}}" width="120px" class="img-fluid" alt="">
                            </td>
                            <td>
                                <a href="{{ route('galeri.edit', ['id' => $galeris->id]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
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
