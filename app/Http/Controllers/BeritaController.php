<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()

    {
        $berita = Berita::get();

        return view(
            'berita',
            [
                'berita' => $berita,
                "title" => "berita"
            ]
        );
    }

    public function index_berita()
    {
        $berita = Berita::get();

        return view(
            'admin/berita',
            [
                'berita' => $berita,
                "title" => "berita"
            ]
        );
    }


    public function create()
    {
        return view(
            'admin.create_berita',
            [
                "title" => "berita"
            ]
        );
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File gambar dengan maksimum 2MB
            'keterangan' => 'required|string|max:255',
        ]);

        // Mengambil file foto dari request
        $fileFoto = $request->file('foto');

        // Menyimpan file foto ke dalam storage (folder public/images)
        $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
        $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'

        // Membuat objek Galeri baru
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->tanggal = $request->tanggal;
        $berita->foto = $namaFoto; // Simpan nama file foto ke dalam database
        $berita->keterangan = $request->keterangan;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek berita ke dalam database
        $berita->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan!');
    }



    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.edit_berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        if (!$berita) {
            return redirect()->route('admin.berita')->with('error', 'Berita tidak ditemukan');
        }

        $berita->judul = $request->input('judul');
        $berita->tanggal = $request->input('tanggal');
        $berita->keterangan = $request->input('keterangan');

        // Cek apakah ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            $fileFoto = $request->file('foto');
            $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto

            // Tentukan direktori untuk menyimpan file foto
            $directory = 'images'; // Misalnya, direktori 'images' di root direktori publik
            // Pindahkan file foto ke direktori yang ditentukan
            $fileFoto->move(public_path($directory), $namaFoto);

            // Simpan nama file foto ke dalam database
            $berita->foto = $namaFoto;
        }

        $berita->save();
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui');
    }
}
