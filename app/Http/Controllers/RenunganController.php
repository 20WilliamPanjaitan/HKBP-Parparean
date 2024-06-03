<?php

namespace App\Http\Controllers;

use App\Models\Renungan_Harian;
use Illuminate\Http\Request;

class RenunganController extends Controller
{
    public function index()

    {
        $renungan = Renungan_Harian::get();

        return view(
            'admin/renungan_harian',
            [
                'renungan' => $renungan,
                "title" => "renungan"
            ]
        );
    }


    
    public function create_renungan()
    {
        return view(
            'admin.create_renungan',
            [
                "title" => "layanan"
            ]
        );
    }

    public function store_renungan(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_renungan' => 'required|string|max:255',
            'ayat_renungan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kategori' => 'required|string|max:255',
            'link_vidio' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $renungan = new Renungan_Harian();
        $renungan->judul = $request->judul;
        $renungan->isi_renungan = $request->isi_renungan;
        $renungan->ayat_renungan = $request->ayat_renungan;
        $renungan->tanggal = $request->tanggal;
        $renungan->kategori = $request->kategori;
        $renungan->link_vidio = $request->link_vidio;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $renungan->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('renungan')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_sending($id)
    {
        $sending = Renungan_Harian::find($id);
        return view('admin.edit_sending', compact('sending'));
    }

    public function update_sending(Request $request, $id)
    {
        $sending = Renungan_Harian::find($id);
        if (!$sending) {
            return redirect()->route('admin.sending')->with('error', 'sending tidak ditemukan');
        }

        $sending->nama = $request->input('nama');
        $sending->jabatan = $request->input('jabatan');
        $sending->status = $request->input('status');

        $sending->save();
        return redirect()->route('sending')->with('success', 'sending berhasil diperbarui');
    }
}
