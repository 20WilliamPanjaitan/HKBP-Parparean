<?php

namespace App\Http\Controllers;

use App\Models\Parhalado;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $parhalado_fulltimer = Parhalado::with('sektor')
            ->whereIn('jabatan', ['Pendeta', 'Bibelvrow', 'Guru Huria'])
            ->where('status', 'Aktif')

            ->get();
        $parhalado = Parhalado::with('sektor')
            ->whereNotIn('jabatan', ['admin', 'Pendeta', 'Bibelvrow', 'Guru Huria'])
            ->where('status', 'Aktif')
            ->get();


        return view(
            'tentang',
            [
                'parhalado_fulltimer' => $parhalado_fulltimer,
                'parhalado' => $parhalado,
                "title" => "tentang"
            ]
        );
    }
}
