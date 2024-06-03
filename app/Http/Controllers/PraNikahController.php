<?php

namespace App\Http\Controllers;

use App\Models\PraNikah;
use Illuminate\Http\Request;

class PraNikahController extends Controller
{
    public function index()
    {
        return view(
            'pranikah',
            [
                "title" => "layanan"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/pranikah',
            [
                "title" => "layanan"
            ]
        );
    }


    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'wijk' => 'required|string|max:255',
            'nomor_kontak' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'mail' => 'required|string|max:255',
            'info' => 'required|string|max:255',
        ]);

        // Mengambil file foto dari request
        //$fileFoto = $request->file('surat_referensi_gereja_asal');

        // Menyimpan file foto ke dalam storage (folder public/images)
       // $namaFoto = $fileFoto->getClientOriginalName(); // Mendapatkan nama asli file foto
       // $fileFoto->move('images', $namaFoto); // Menyimpan file foto ke folder 'images'


        $pranikah = new PraNikah();

        $pranikah->nomor_kontak = $request->nomor_kontak;
        $pranikah->alamat = $request->alamat;
        $pranikah->mail = $request->mail;
        $pranikah->wijk = $request->wijk;
      //  $jemaat_baru->surat_referensi_gereja_asal = $namaFoto; // Simpan nama file foto ke dalam database
        $pranikah->info = $request->info;
        $pranikah->status = "Menunggu";

        $pranikah->save();
        return view(
            'pranikah',
            [
                "title" => "layanan"
            ]
        );
    }
}
