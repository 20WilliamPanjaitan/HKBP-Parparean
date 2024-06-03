<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ibadah;
use App\Models\Jemaat;
use App\Models\Kontak;
use App\Models\Parhalado;
use App\Models\Renungan_Harian;
use App\Models\Tata_Ibadah;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $renungan = Renungan_Harian::where('status', 'Tampilkan')->get();
        $tata_ibadah = Tata_Ibadah::get();
        $pendeta = Parhalado::where('jabatan', 'Pendeta')->get();
        $bibel = Parhalado::where('jabatan', 'Bibelvrow')->get();
        $guru = Parhalado::where('jabatan', 'Guru Huria')->get();
        $berita = Berita::take(3)->get();
        $parhalado = Parhalado::count();
        $jemaat = Jemaat::whereIn('status', ['Aktif', 'NonAktif'])->count();


        return view('beranda', [
            'renungan' => $renungan,
            'ibadah' => $tata_ibadah,
            'pendeta' => $pendeta,
            'bibel' => $bibel,
            'guru' => $guru,
            'berita' => $berita,
            'parhalado' => $parhalado,
            'jemaat' => $jemaat,
            'title' => 'beranda'
        ]);
    }


    public function kontak()
    {
        $kontaks = Kontak::all();
        return view('header', ['kontaks' => $kontaks]);
    }


    public function index_admin()
    {
        $parhalado = Parhalado::count();
        $jemaat = Jemaat::count();

        return view(
            'admin/index',
            [
                'parhalado' => $parhalado,
                'jemaat' => $jemaat,
                'title' => "beranda",
            ]
        );
    }



    function view_pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }
}
