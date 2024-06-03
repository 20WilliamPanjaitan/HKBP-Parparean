<?php

namespace App\Http\Controllers;

use App\Models\Ibadah;
use Illuminate\Http\Request;

class IbadahController extends Controller
{
    public function index_ibadah()
    {
        return view(
            'admin/ibadah',
            [
                "title" => "tata_ibadah"
            ]
        );
    }

    public function create()
    {
        return view(
            'admin.create_ibadah',
            [
                "title" => "ibadah",
            ]
        );
    }


    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_ibadah' => 'required|string|max:255',
            'tanggal_ibadah' => 'required|date',
            'pengkotbah' => 'required|string|max:255',
        ]);

        // Membuat objek baru
        $ibadah = new Ibadah();
        $ibadah->nama_ibadah = $request->nama_ibadah;
        $ibadah->tanggal_ibadah = $request->tanggal_ibadah;
        $ibadah->pengkotbah = $request->pengkotbah;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek ibadah ke dalam database
        $ibadah->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('create.tata_ibadah')->with('success', 'ibadah berhasil ditambahkan!');
    }
}
