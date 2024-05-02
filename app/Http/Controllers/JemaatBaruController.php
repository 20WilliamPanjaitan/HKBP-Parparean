<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemaatBaruController extends Controller
{
    public function index()
    {
        return view(
            'jemaat_baru',
            [
                "title" => "layanan"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/jemaat_baru',
            [
                "title" => "layanan"
            ]
        );
    }
}
