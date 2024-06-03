<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Models\JemaatBaru;
use Illuminate\Http\Request;

class JemaatBaruController extends Controller
{
    public function index()
    {
        return view(
            'jemaat_baru',
            [
                "title" => "layanan"
            ]
        );
    }

    public function index_admin()
    {
        $jemaat = Jemaat::whereIn('status', ['Request', 'Tolak'])->get();

        return view(
            'admin/jemaat_baru',
            [
                "title" => "layanan",
                "jemaat" => $jemaat,

            ]
        );
    }



    public function approve($id)
    {
        $request = Jemaat::find($id);
        if ($request) {
            $request->status = 'Aktif';
            $request->save();
        }

        return redirect()->back()->with('status', 'Request approved successfully');
    }

    public function reject($id)
    {
        $request = Jemaat::find($id);
        if ($request) {
            $request->status = 'Tolak';
            $request->save();
        }

        return redirect()->back()->with('status', 'Request rejected successfully');
    }



    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_jemaat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'kategori_jemaat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            // 'file_babtis' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:5048',
            // 'file_babtis' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File gambar dengan maksimum 2MB

        ]);
        // Mengambil file foto dari request
        // $fileFoto = $request->file('file_babtis');

        // // Menyimpan file foto ke dalam storage (folder public/images)
        // $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
        // $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'

        // Membuat objek Galeri baru
        $jemaat = new Jemaat();
        $jemaat->nama_jemaat = $request->nama_jemaat;
        $jemaat->jenis_kelamin = $request->jenis_kelamin;
        $jemaat->kategori_jemaat = $request->kategori_jemaat;
        // $jemaat->file_babtis = $namaFoto; // Simpan nama file foto ke dalam database
        $jemaat->tempat_lahir = $request->tempat_lahir;
        $jemaat->tanggal_lahir = $request->tanggal_lahir;
        $jemaat->alamat = $request->alamat;
        $jemaat->no_telepon = $request->no_telepon;

        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek jemaat ke dalam database
        $jemaat->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('layanan')->with('success', 'jemaat berhasil ditambahkan!');
    }



    public function edit($id)
    {
        $jemaat = Jemaat::find($id);
        return view('admin.edit_jemaat', compact('jemaat'));
    }

    public function update_jemaat(Request $request, $id)
    {
        $jemaat = Jemaat::find($id);
        if (!$jemaat) {
            return redirect()->route('admin.jemaat')->with('error', 'jemaat tidak ditemukan');
        }

        $jemaat->nama_jemaat = $request->input('nama_jemaat');
        $jemaat->jenis_kelamin = $request->input('jenis_kelamin');
        $jemaat->tempat_lahir = $request->input('tempat_lahir');
        $jemaat->tanggal_lahir = $request->input('tanggal_lahir');
        $jemaat->alamat = $request->input('alamat');
        $jemaat->kategori_jemaat = $request->input('kategori_jemaat');
        $jemaat->status = $request->input('status');


        $jemaat->save();
        return redirect()->route('jemaat_baru')->with('success', 'jemaat berhasil diperbarui');
    }
}
