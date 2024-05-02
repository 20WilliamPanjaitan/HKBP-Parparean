<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ibadah;
use App\Models\Kontak;
use App\Models\Parhalado;
use App\Models\Renungan_Harian;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $renungan = Renungan_Harian::where('status', 'Tampilkan')->get();
        $ibadah = Ibadah::get();
        $pendeta = Parhalado::where('jabatan', 'Pendeta')->get();
        $bibel = Parhalado::where('jabatan', 'Bibelvrow')->get();
        $guru = Parhalado::where('jabatan', 'Guru Huria')->get();
        $berita = Berita::get();

        return view('beranda', [
            'renungan' => $renungan,
            'ibadah' => $ibadah,
            'pendeta' => $pendeta,
            'bibel' => $bibel,
            'guru' => $guru,
            'berita' => $berita,
            'title' => 'beranda'
        ]);
    }


    public function kontak()
    {
        return view('header', [
            'kontaks' => Kontak::get()
        ]);
    }


    public function index_admin()
    {
        return view(
            'admin/index',
            [
                "title" => "index"
            ]
        );
    }
}
