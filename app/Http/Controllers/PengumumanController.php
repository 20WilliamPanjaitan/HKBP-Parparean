<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()

    {
        $pengumuman = Pengumuman::get();
        return view(
            'pengumuman',
            [
                "title" => "berita",
                "pengumuman" => $pengumuman,

            ]
        );
    }

    public function index_admin()
    {
        $pengumuman = Pengumuman::get();
        return view(
            'admin/pengumuman',
            [
                "pengumuman" => $pengumuman,
                "title" => "berita"
            ]
        );
    }


    public function create()
    {
        return view('admin.create_pengumuman');
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

        // Membuat objek Pengumuman baru
        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->judul;
        $pengumuman->tanggal = $request->tanggal;
        $pengumuman->foto = $namaFoto; // Simpan nama file foto ke dalam database
        $pengumuman->keterangan = $request->keterangan;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek Pengumuman ke dalam database
        $pengumuman->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('admin.edit_pengumuman', compact('pengumuman'));
    }


    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        if (!$pengumuman) {
            return redirect()->route('admin.pengumuman')->with('error', 'pengumuman tidak ditemukan');
        }

        $pengumuman->judul = $request->input('judul');
        $pengumuman->tanggal = $request->input('tanggal');
        $pengumuman->keterangan = $request->input('keterangan');

        // Cek apakah ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            $fileFoto = $request->file('foto');
            $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto

            // Tentukan direktori untuk menyimpan file foto
            $directory = 'images'; // Misalnya, direktori 'images' di root direktori publik
            // Pindahkan file foto ke direktori yang ditentukan
            $fileFoto->move(public_path($directory), $namaFoto);

            // Simpan nama file foto ke dalam database
            $pengumuman->foto = $namaFoto;

            // // Hapus foto lama jika ada
            // if ($pengumuman->foto && file_exists(public_path($pengumuman->foto))) {
            //     unlink(public_path($pengumuman->foto));
            // }
        }

        $pengumuman->save();
        return redirect()->route('admin.pengumuman')->with('success', 'pengumuman berhasil diperbarui');
    }
}
