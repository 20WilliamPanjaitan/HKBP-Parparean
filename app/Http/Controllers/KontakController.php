<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index_admin()
    {
        $kontak = Kontak::get();
        return view(
            'admin/kontak',
            [
                "kontak" => $kontak,
                "title" => "kontak"
            ]
        );
    }


    public function edit($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.edit_kontak', compact('kontak'));
    }

    public function update(Request $request, $id)
    {
        $kontaks = Kontak::find($id);
        if (!$kontaks) {
            return redirect()->route('admin.kontak')->with('error', 'kontak tidak ditemukan');
        }

        $kontaks->no_telepon = $request->input('no_telepon');
        $kontaks->whatsapp = $request->input('whatsapp');
        $kontaks->instagram = $request->input('instagram');
        $kontaks->twitter = $request->input('twitter');
        $kontaks->facebook = $request->input('facebook');
        $kontaks->youtube = $request->input('youtube');


        $kontaks->save();
        return redirect()->route('admin.kontak')->with('success', 'kontak berhasil diperbarui');
    }
}
