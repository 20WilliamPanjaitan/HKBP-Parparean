<?php

namespace App\Http\Controllers;

use App\Models\Keanggotaan;
use App\Models\Kegiatan;
use App\Models\Seksi;
use Illuminate\Http\Request;

class DiakoniaController extends Controller
{
    public function index()
    {
        $sosial = Keanggotaan::where('id_seksi', 8)->with('seksi')->get();
        $sosial_kegiatan = Kegiatan::where('id_seksi', 8)->with('seksi')->get();

        $kemasyarakatan = Keanggotaan::where('id_seksi', 9)->with('seksi')->get();
        $kemasyarakatan_kegiatan = Kegiatan::where('id_seksi', 9)->with('seksi')->get();

        $foto_sosial = Seksi::where('id', 8)->get();
        $foto_kemasyarakatan = Seksi::where('id', 9)->get();


        return view(
            'diakonia',
            [
                "title" => "diakonia",
                'sosial' => $sosial,
                'sosial_kegiatan' => $sosial_kegiatan,
                'kemasyarakatan' => $kemasyarakatan,
                'kemasyarakatan_kegiatan' => $kemasyarakatan_kegiatan,
                'foto_sosial' => $foto_sosial,
                'foto_kemasyarakatan' => $foto_kemasyarakatan
            ]
        );
    }


    public function sosial()
    {
        $sosial = Keanggotaan::where('id_seksi', 8)->get();

        return view(
            'admin/sosial',
            [
                "title" => "diakonia",
                'sosial' => $sosial,

            ]
        );
    }

    public function kemasyarakatan()
    {
        $kemasyarakatan = Keanggotaan::where('id_seksi', 9)->get();

        return view(
            'admin/kemasyarakatan',
            [
                "title" => "diakonia",
                'kemasyarakatan' => $kemasyarakatan,

            ]
        );
    }

    // SOSIAL
    public function create_sosial()
    {
        return view(
            'admin.create_sosial',
            [
                "title" => "sosial"
            ]
        );
    }

    public function store_sosial(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $sosial = new Keanggotaan();
        $sosial->nama = $request->nama;
        $sosial->jabatan = $request->jabatan;
        $sosial->status = $request->status;
        $sosial->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $sosial->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('sosial')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_sosial($id)
    {
        $sosial = Keanggotaan::find($id);
        return view('admin.edit_sosial', compact('sosial'));
    }

    public function update_sosial(Request $request, $id)
    {
        $sosial = Keanggotaan::find($id);
        if (!$sosial) {
            return redirect()->route('admin.sosial')->with('error', 'sosial tidak ditemukan');
        }

        $sosial->nama = $request->input('nama');
        $sosial->jabatan = $request->input('jabatan');
        $sosial->status = $request->input('status');

        $sosial->save();
        return redirect()->route('sosial')->with('success', 'sosial berhasil diperbarui');
    }



    // KEMASYARAKATAN
    public function create_kemasyarakatan()
    {
        return view(
            'admin.create_kemasyarakatan',
            [
                "title" => "kemasyarakatan"
            ]
        );
    }

    public function store_kemasyarakatan(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $kemasyarakatan = new Keanggotaan();
        $kemasyarakatan->nama = $request->nama;
        $kemasyarakatan->jabatan = $request->jabatan;
        $kemasyarakatan->status = $request->status;
        $kemasyarakatan->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $kemasyarakatan->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('kemasyarakatan')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_kemasyarakatan($id)
    {
        $kemasyarakatan = Keanggotaan::find($id);
        return view('admin.edit_kemasyarakatan', compact('kemasyarakatan'));
    }

    public function update_kemasyarakatan(Request $request, $id)
    {
        $kemasyarakatan = Keanggotaan::find($id);
        if (!$kemasyarakatan) {
            return redirect()->route('admin.kemasyarakatan')->with('error', 'kemasyarakatan tidak ditemukan');
        }

        $kemasyarakatan->nama = $request->input('nama');
        $kemasyarakatan->jabatan = $request->input('jabatan');
        $kemasyarakatan->status = $request->input('status');

        $kemasyarakatan->save();
        return redirect()->route('kemasyarakatan')->with('success', 'kemasyarakatan berhasil diperbarui');
    }
}
