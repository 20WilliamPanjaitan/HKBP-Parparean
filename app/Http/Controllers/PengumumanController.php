<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return view(
            'pengumuman',
            [
                "title" => "berita"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/pengumuman',
            [
                "title" => "berita"
            ]
        );
    }
}
