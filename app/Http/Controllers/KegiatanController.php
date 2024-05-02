<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view(
            'kegiatan',
            [
                "title" => "berita"
            ]
        );
    }

    public function index_admin()
    {
        return view(
            'admin/kegiatan',
            [
                "title" => "berita"
            ]
        );
    }
}
