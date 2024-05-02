<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaikSidiController extends Controller
{
    public function index()
    {
        return view(
            'naik_sidi',
            [
                "title" => "layanan"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/naik_sidi',
            [
                "title" => "layanan"
            ]
        );
    }
}
