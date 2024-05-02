<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        return view(
            'acara',
            [
                "title" => "berita"
            ]
        );
    }


    public function index_admin()
    {
        $acara = Acara::get();

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
        return view('admin/tambah_acara');
    }



    public function store(Request $request)
    {
        $acara = new Acara();

        $acara->nama_acara = $request->nama_acara;
        $acara->lokasi_acara = $request->lokasi_acara;
        $acara->jenis_acara = $request->jenis_acara;
        $acara->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $acara->keterangan = $request->keterangan;

        $acara->save();
        return redirect('admin/acara');
    }


    public function edit_acara($id)
    {
        return view('admin/edit_acara');
    }
}
