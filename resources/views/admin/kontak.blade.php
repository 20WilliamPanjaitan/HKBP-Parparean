@extends('admin/side_bar')
@section('title', 'kontak')
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
    <h1 class="h3 mb-2 text-gray-800">Kontak</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kontak</h6>
            <div style="text-align: right;"> 
                @foreach ($kontak as $item)
                <a href="{{ route('kontak.edit', ['id' => $item->id]) }}" class="btn btn-success btn-sm">Edit Data</a>
                @endforeach
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    No Telepon
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->no_telepon}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    WhatsApp
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->whatsapp}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    Instagram
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->instagram}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    Twiter
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->twitter}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    Facebook
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->facebook}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    Youtube
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                @foreach ($kontak as $item)
                                <div class="card-header">
                                    {{$item->youtube}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
