<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;


class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();

        return view(
            'galeri',
            [
                'galeri' => $galeri,
                'title' => 'galeri'
            ]
        );
    }

    public function index_admin()
    {
        $galeri = Galeri::get();

        return view(
            'admin/galeri',
            [
                'galeri' => $galeri,
                "title" => "galeri"
            ]
        );
    }

    public function create()
    {
        return view('admin.create_galeri');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File gambar dengan maksimum 2MB
            'keterangan' => 'required|string|max:255',
        ]);

        // Mengambil file foto dari request
        $fileFoto = $request->file('foto');

        // Menyimpan file foto ke dalam storage (folder public/images)
        $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
        $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'

        // Membuat objek Galeri baru
        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->foto = $namaFoto; // Simpan nama file foto ke dalam database
        $galeri->keterangan = $request->keterangan;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek Galeri ke dalam database
        $galeri->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil ditambahkan!');
    }
}
