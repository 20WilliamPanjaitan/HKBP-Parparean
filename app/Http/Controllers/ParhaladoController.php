<?php

namespace App\Http\Controllers;

use App\Models\Parhalado;
use Illuminate\Http\Request;

class ParhaladoController extends Controller
{
    public function parhalado_admin()
    {
        $parhalado = Parhalado::with('sektor')->get();

        return view(
            'admin/parhalado',
            [
                'parhalado' => $parhalado,
                "title" => "tentang"
            ]
        );
    }


    public function create()
    {
        return view(
            'admin.create_parhalado',
            [
                "title" => "parhalado"
            ]
        );
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_sektor' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File gambar dengan maksimum 2MB
            'jabatan' => 'required|string|max:255',
        ]);

        // Mengambil file foto dari request
        $fileFoto = $request->file('foto');

        // Menyimpan file foto ke dalam storage (folder public/images)
        $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
        $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'

        // Membuat objek Galeri baru
        $parhalado = new Parhalado();
        $parhalado->nama = $request->nama;
        $parhalado->id_sektor = $request->id_sektor;
        $parhalado->tanggal_lahir = $request->tanggal_lahir;
        $parhalado->foto = $namaFoto; // Simpan nama file foto ke dalam database
        $parhalado->jabatan = $request->jabatan;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek parhalado ke dalam database
        $parhalado->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('admin.parhalado')->with('success', 'parhalado berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $parhalado = Parhalado::find($id);
        return view('admin.edit_parhalado', compact('parhalado'));
    }

    public function update(Request $request, $id)
    {
        $parhalado = Parhalado::find($id);
        if (!$parhalado) {
            return redirect()->route('admin.parhalado')->with('error', 'parhalado tidak ditemukan');
        }

        $parhalado->nama = $request->input('nama');
        $parhalado->status = $request->input('status');
        $parhalado->id_sektor = $request->input('id_sektor');
        $parhalado->jabatan = $request->input('jabatan');
        $parhalado->tanggal_lahir = $request->input('tanggal_lahir');
        $parhalado->foto = $request->input('foto');

        // Cek apakah ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            $fileFoto = $request->file('foto');
            $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto

            // Tentukan direktori untuk menyimpan file foto
            $directory = 'images'; // Misalnya, direktori 'images' di root direktori publik
            // Pindahkan file foto ke direktori yang ditentukan
            $fileFoto->move(public_path($directory), $namaFoto);

            // Simpan nama file foto ke dalam database
            $parhalado->foto = $namaFoto;
        }

        $parhalado->save();
        return redirect()->route('admin.parhalado')->with('success', 'parhalado berhasil diperbarui');
    }
}
