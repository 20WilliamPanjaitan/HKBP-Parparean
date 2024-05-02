<?php

namespace App\Http\Controllers;

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
}
