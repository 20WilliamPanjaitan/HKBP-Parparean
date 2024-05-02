<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemaatPindahController extends Controller
{
    public function index()
    {
        return view(
            'jemaat_pindah',
            [
                "title" => "layanan"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/jemaat_pindah',
            [
                "title" => "layanan"
            ]
        );
    }
}
