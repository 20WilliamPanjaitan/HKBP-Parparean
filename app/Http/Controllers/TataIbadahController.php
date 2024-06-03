<?php

namespace App\Http\Controllers;

use App\Models\Ibadah;
use App\Models\Tata_Ibadah;
use Illuminate\Http\Request;

class TataIbadahController extends Controller
{
    public function index_tata_ibadah()
    {
        $tata_ibadah = Tata_Ibadah::get();

        return view(
            'admin.index',
            [
                'ibadah' => $tata_ibadah,
                "title" => "beranda"
            ]
        );
    }


    public function index($id)
    {
        $tata_ibadah = Tata_Ibadah::with('ibadah')->find($id);
        return view('tata_ibadah', compact('tata_ibadah'));
    }



    public function view_pdf($id)
    {
        $mpdf = new \Mpdf\Mpdf();
        $tata_ibadah = Tata_Ibadah::find($id);
        $mpdf->WriteHTML(view('tata_ibadah', compact('tata_ibadah')));
        $mpdf->Output();
    }


    public function download_pdf($id)
    {
        $mpdf = new \Mpdf\Mpdf();
        $tata_ibadah = Tata_Ibadah::find($id);
        $mpdf->WriteHTML(view('tata_ibadah', compact('tata_ibadah')));
        $mpdf->Output('tata_ibadah.pdf', 'D');
    }





    public function create()
    {
        $tata_ibadah = Ibadah::latest()->first();

        return view(
            'admin.create_tata_ibadah',
            [
                "title" => "tata_ibadah",
                'tata_ibadah' => $tata_ibadah
            ]
        );
    }


    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'id_ibadah' => 'required|string|max:255',
            'lagu1' => 'required|string|max:255',
            'lagu2' => 'required|string|max:255',
            'lagu3' => 'required|string|max:255',
            'lagu4' => 'required|string|max:255',
            'lagu5' => 'required|string|max:255',
            'lagu6' => 'required|string|max:255',
            'lagu7' => 'required|string|max:255',
            'koor1' => 'required|string|max:255',
            'koor2' => 'required|string|max:255',
            'koor3' => 'required|string|max:255',
            'koor4' => 'required|string|max:255',
            'patik' => 'required|string|max:255',
            'epistel' => 'required|string|max:255',
            'jamita' => 'required|string|max:255',
        ]);


        // Membuat objek Galeri baru
        $tata_ibadah = new Tata_Ibadah();
        $tata_ibadah->id_ibadah = $request->id_ibadah;
        $tata_ibadah->lagu1 = $request->lagu1;
        $tata_ibadah->lagu2 = $request->lagu2;
        $tata_ibadah->lagu3 = $request->lagu3;
        $tata_ibadah->lagu4 = $request->lagu4;
        $tata_ibadah->lagu5 = $request->lagu5;
        $tata_ibadah->lagu6 = $request->lagu6;
        $tata_ibadah->lagu7 = $request->lagu7;
        $tata_ibadah->koor1 = $request->koor1;
        $tata_ibadah->koor2 = $request->koor2;
        $tata_ibadah->koor3 = $request->koor3;
        $tata_ibadah->koor4 = $request->koor4;
        $tata_ibadah->patik = $request->patik;
        $tata_ibadah->epistel = $request->epistel;
        $tata_ibadah->jamita = $request->jamita;

        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek tata_ibadah ke dalam database
        $tata_ibadah->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('admin.index')->with('success', 'tata_ibadah berhasil ditambahkan!');
    }



    public function edit($id)
    {
        $tata_ibadah = Tata_Ibadah::find($id);
        return view('admin.edit_tata_ibadah', compact('tata_ibadah'));
    }

    public function update(Request $request, $id)
    {
        $tata_ibadah = Tata_Ibadah::find($id);
        if (!$tata_ibadah) {
            return redirect()->route('admin.tata_ibadah')->with('error', 'Tata Ibadah tidak ditemukan');
        }
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');
        $tata_ibadah->id_ibadah = $request->input('judul');



        $tata_ibadah->save();
        return redirect()->route('admin.tata_ibadah')->with('success', 'Tata Ibadah berhasil diperbarui');
    }
}
