<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = Acara::all();

        return view(

            'acara',
            [
                'acara' => $acara,
                "title" => "berita",

            ]
        );
    }


    public function index_admin()
    {
        $acara = Acara::all();

        return view(
            'admin/acara',
            [
                'acara' => $acara,
                'title' => 'berita'
            ]
        );
    }



    public function create()
    {
        return view(
            'admin.tambah_acara',
            [
                "title" => "acara"
            ]
        );
    }



    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_acara' => 'required|string|max:255',
            'lokasi_acara' => 'required|string|max:255',
            'jenis_acara' => 'required|string|max:255',
            'waktu_pelaksanaan' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File gambar dengan maksimum 2MB
            'keterangan' => 'required|string|max:255',
        ]);

        // Mengambil file foto dari request
        $fileFoto = $request->file('foto');

        // Menyimpan file foto ke dalam storage (folder public/images)
        $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
        $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'


        $acara = new Acara();

        $acara->nama_acara = $request->nama_acara;
        $acara->lokasi_acara = $request->lokasi_acara;
        $acara->jenis_acara = $request->jenis_acara;
        $acara->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $acara->foto = $namaFoto; // Simpan nama file foto ke dalam database
        $acara->keterangan = $request->keterangan;

        $acara->save();
        return redirect('admin/acara')->with("success_tambah", "Berhasil Ditambah");
    }


    public function edit($id)
    {
        $acara = Acara::find($id);
        return view('admin.edit_acara', compact('acara'));
    }



    public function update(Request $request, $id)
    {
        $acara = Acara::find($id);
        if (!$acara) {
            return redirect()->route('admin_acara')->with('error', 'acara tidak ditemukan');
        }

        $acara->nama_acara = $request->input('nama_acara');
        $acara->lokasi_acara = $request->input('lokasi_acara');
        $acara->jenis_acara = $request->input('jenis_acara');
        $acara->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
        $acara->keterangan = $request->input('keterangan');
        $acara->foto = $request->input('foto');


        // Cek apakah ada file foto baru yang diunggah
        if ($request->hasFile('foto')) {
            $fileFoto = $request->file('foto');
            $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto

            // Tentukan direktori untuk menyimpan file foto
            $directory = 'images'; // Misalnya, direktori 'images' di root direktori publik
            // Pindahkan file foto ke direktori yang ditentukan
            $fileFoto->move(public_path($directory), $namaFoto);

            // Simpan nama file foto ke dalam database
            $acara->foto = $namaFoto;
        }

        $acara->save();
        return redirect()->route('admin_acara')->with('success', 'acara berhasil diperbarui');
    }




    public function delete_acara(Acara $acara)
    {
        $acara->delete();
        return Redirect::route('admin_acara')->with("success", "Berhasil dihapus");
    }
}
