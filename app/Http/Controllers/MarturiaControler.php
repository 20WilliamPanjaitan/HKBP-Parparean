<?php

namespace App\Http\Controllers;

use App\Models\Keanggotaan;
use App\Models\Kegiatan;
use App\Models\Seksi;
use Illuminate\Http\Request;

class MarturiaControler extends Controller
{

    public function index()
    {
        $sending = Keanggotaan::where('id_seksi', 6)->with('seksi')->get();
        $sending_kegiatan = Kegiatan::where('id_seksi', 6)->with('seksi')->get();

        $musik = Keanggotaan::where('id_seksi', 7)->with('seksi')->get();
        $musik_kegiatan = Kegiatan::where('id_seksi', 7)->with('seksi')->get();

        $foto_sending = Seksi::where('id', 6)->get();
        $foto_musik = Seksi::where('id', 7)->get();

        return view(
            'marturia',
            [
                "title" => "marturia",
                'sending' => $sending,
                'sending_kegiatan' => $sending_kegiatan,
                'musik' => $musik,
                'musik_kegiatan' => $musik_kegiatan,
                'foto_sending' => $foto_sending,
                'foto_musik' => $foto_musik
            ]
        );
    }


    public function sending()
    {
        $sending = Keanggotaan::where('id_seksi', 6)->get();

        return view(
            'admin/sending',
            [
                "title" => "marturia",
                'sending' => $sending,

            ]
        );
    }

    public function musik()
    {
        $musik = Keanggotaan::where('id_seksi', 7)->get();

        return view(
            'admin/musik',
            [
                "title" => "marturia",
                'musik' => $musik,

            ]
        );
    }


    // SENDING
    public function create_sending()
    {
        return view(
            'admin.create_sending',
            [
                "title" => "sending"
            ]
        );
    }

    public function store_sending(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $sending = new Keanggotaan();
        $sending->nama = $request->nama;
        $sending->jabatan = $request->jabatan;
        $sending->status = $request->status;
        $sending->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $sending->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('sending')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_sending($id)
    {
        $sending = Keanggotaan::find($id);
        return view('admin.edit_sending', compact('sending'));
    }

    public function update_sending(Request $request, $id)
    {
        $sending = Keanggotaan::find($id);
        if (!$sending) {
            return redirect()->route('admin.sending')->with('error', 'sending tidak ditemukan');
        }

        $sending->nama = $request->input('nama');
        $sending->jabatan = $request->input('jabatan');
        $sending->status = $request->input('status');

        $sending->save();
        return redirect()->route('sending')->with('success', 'sending berhasil diperbarui');
    }



    // MUSIK
    public function create_musik()
    {
        return view(
            'admin.create_musik',
            [
                "title" => "musik"
            ]
        );
    }

    public function store_musik(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $musik = new Keanggotaan();
        $musik->nama = $request->nama;
        $musik->jabatan = $request->jabatan;
        $musik->status = $request->status;
        $musik->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $musik->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('musik')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_musik($id)
    {
        $musik = Keanggotaan::find($id);
        return view('admin.edit_musik', compact('musik'));
    }

    public function update_musik(Request $request, $id)
    {
        $musik = Keanggotaan::find($id);
        if (!$musik) {
            return redirect()->route('admin.musik')->with('error', 'musik tidak ditemukan');
        }

        $musik->nama = $request->input('nama');
        $musik->jabatan = $request->input('jabatan');
        $musik->status = $request->input('status');

        $musik->save();
        return redirect()->route('musik')->with('success', 'musik berhasil diperbarui');
    }
}
