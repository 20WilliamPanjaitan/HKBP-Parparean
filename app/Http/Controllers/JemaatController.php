<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function jemaat_admin()

    {
        $jemaat = Jemaat::whereIn('status', ['NonAktif', 'Aktif'])->get();

        return view(
            'admin/jemaat',
            [
                "title" => "tentang",
                "jemaat" => $jemaat
            ]
        );
    }
}
