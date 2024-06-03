<?php

namespace App\Http\Controllers;

use App\Models\Keanggotaan;
use App\Models\Kegiatan;
use App\Models\Seksi;
use Illuminate\Http\Request;

class KoinoniaController extends Controller
{
    public function index()
    {
        $sekolah_minggu = Keanggotaan::where('id_seksi', 1)
            ->with('seksi')
            ->where('status', 'Aktif')
            ->get();
        $sekolah_minggu_kegiatan = Kegiatan::where('id_seksi', 1)
            ->with('seksi')
            ->get();

        $remaja = Keanggotaan::where('id_seksi', 2)
            ->with('seksi')
            ->get();

        $remaja_kegiatan = Kegiatan::where('id_seksi', 2)
            ->with('seksi')
            ->get();

        $naposo = Keanggotaan::where('id_seksi', 3)
            ->with('seksi')
            ->get();
        $naposo_kegiatan = Kegiatan::where('id_seksi', 3)
            ->with('seksi')
            ->get();

        $parompuan = Keanggotaan::where('id_seksi', 4)
            ->with('seksi')
            ->get();
        $parompuan_kegiatan = Kegiatan::where('id_seksi', 4)
            ->with('seksi')
            ->get();

        $ama = Keanggotaan::where('id_seksi', 5)
            ->with('seksi')
            ->get();

        $ama_kegiatan = Kegiatan::where('id_seksi', 5)
            ->with('seksi')
            ->get();

        $foto_sekolah_minggu = Seksi::where('id', 1)->get();
        $foto_remaja = Seksi::where('id', 2)->get();
        $foto_naposo = Seksi::where('id', 3)->get();
        $foto_parompuan = Seksi::where('id', 4)->get();
        $foto_ama = Seksi::where('id', 5)->get();



        return view(
            'koinonia',
            [
                "title" => "koinonia",
                'sekolah_minggu' => $sekolah_minggu,
                'sekolah_minggu_kegiatan' => $sekolah_minggu_kegiatan,
                'remaja' => $remaja,
                'remaja_kegiatan' => $remaja_kegiatan,
                'naposo' => $naposo,
                'naposo_kegiatan' => $naposo_kegiatan,
                'parompuan' => $parompuan,
                'parompuan_kegiatan' => $parompuan_kegiatan,
                'ama' => $ama,
                'ama_kegiatan' => $ama_kegiatan,
                'foto_sekolah_minggu' => $foto_sekolah_minggu,
                'foto_remaja' => $foto_remaja,
                'foto_naposo' => $foto_naposo,
                'foto_parompuan' => $foto_parompuan,
                'foto_ama' => $foto_ama
            ]
        );
    }


    public function sekolah_minggu()
    {
        $sekolah_minggu = Keanggotaan::where('id_seksi', 1)->with('seksi')->get();

        return view(
            'admin/sekolah_minggu',
            [
                "title" => "koinonia",
                'sekolah_minggu' => $sekolah_minggu,
            ]
        );
    }

    public function remaja()
    {
        $remaja = Keanggotaan::where('id_seksi', 2)->get();

        return view(
            'admin/remaja',
            [
                "title" => "koinonia",
                'remaja' => $remaja,

            ]
        );
    }


    public function naposo()
    {
        $naposo = Keanggotaan::where('id_seksi', 3)->get();

        return view(
            'admin/naposo',
            [
                "title" => "koinonia",
                'naposo' => $naposo,

            ]
        );
    }


    public function parompuan()
    {
        $parompuan = Keanggotaan::where('id_seksi', 4)->get();

        return view(
            'admin/parompuan',
            [
                "title" => "koinonia",
                'parompuan' => $parompuan,

            ]
        );
    }

    public function ama()
    {
        $ama = Keanggotaan::where('id_seksi', 5)->get();

        return view(
            'admin/ama',
            [
                "title" => "koinonia",
                'ama' => $ama,

            ]
        );
    }



    // SEKOLAH MINGGU
    public function create_sekolah_minggu()
    {
        return view(
            'admin.create_sekolah_minggu',
            [
                "title" => "sekolah_minggu"
            ]
        );
    }

    public function store_sekolah_minggu(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $sekolah_minggu = new Keanggotaan();
        $sekolah_minggu->nama = $request->nama;
        $sekolah_minggu->jabatan = $request->jabatan;
        $sekolah_minggu->status = $request->status;
        $sekolah_minggu->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $sekolah_minggu->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('sekolah_minggu')->with('success', 'Sekolah Minggu berhasil ditambahkan!');
    }

    public function edit_sekolah_minggu($id)
    {
        $sekolah_minggu = Keanggotaan::find($id);
        return view('admin.edit_sekolah_minggu', compact('sekolah_minggu'));
    }

    public function update_sekolah_minggu(Request $request, $id)
    {
        $sekolah_minggu = Keanggotaan::find($id);
        if (!$sekolah_minggu) {
            return redirect()->route('admin.sekolah_minggu')->with('error', 'sekolah_minggu tidak ditemukan');
        }

        $sekolah_minggu->nama = $request->input('nama');
        $sekolah_minggu->jabatan = $request->input('jabatan');
        $sekolah_minggu->status = $request->input('status');

        $sekolah_minggu->save();
        return redirect()->route('sekolah_minggu')->with('success', 'sekolah_minggu berhasil diperbarui');
    }


    // REMAJA
    public function create_remaja()
    {
        return view(
            'admin.create_remaja',
            [
                "title" => "remaja"
            ]
        );
    }

    public function store_remaja(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $remaja = new Keanggotaan();
        $remaja->nama = $request->nama;
        $remaja->jabatan = $request->jabatan;
        $remaja->status = $request->status;
        $remaja->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $remaja->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('remaja')->with('success', ' berhasil ditambahkan!');
    }



    public function edit_remaja($id)
    {
        $remaja = Keanggotaan::find($id);
        return view('admin.edit_remaja', compact('remaja'));
    }

    public function update_remaja(Request $request, $id)
    {
        $remaja = Keanggotaan::find($id);
        if (!$remaja) {
            return redirect()->route('admin.remaja')->with('error', 'remaja tidak ditemukan');
        }

        $remaja->nama = $request->input('nama');
        $remaja->jabatan = $request->input('jabatan');
        $remaja->status = $request->input('status');

        $remaja->save();
        return redirect()->route('remaja')->with('success', 'remaja berhasil diperbarui');
    }



    // NAPOSO
    public function create_naposo()
    {
        return view(
            'admin.create_naposo',
            [
                "title" => "naposo"
            ]
        );
    }

    public function store_naposo(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $naposo = new Keanggotaan();
        $naposo->nama = $request->nama;
        $naposo->jabatan = $request->jabatan;
        $naposo->status = $request->status;
        $naposo->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $naposo->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('naposo')->with('success', ' berhasil ditambahkan!');
    }



    public function edit_naposo($id)
    {
        $naposo = Keanggotaan::find($id);
        return view('admin.edit_naposo', compact('naposo'));
    }

    public function update_naposo(Request $request, $id)
    {
        $naposo = Keanggotaan::find($id);
        if (!$naposo) {
            return redirect()->route('admin.naposo')->with('error', 'naposo tidak ditemukan');
        }

        $naposo->nama = $request->input('nama');
        $naposo->jabatan = $request->input('jabatan');
        $naposo->status = $request->input('status');

        $naposo->save();
        return redirect()->route('naposo')->with('success', 'naposo berhasil diperbarui');
    }



    // PAROMPUAN
    public function create_parompuan()
    {
        return view(
            'admin.create_parompuan',
            [
                "title" => "parompuan"
            ]
        );
    }

    public function store_parompuan(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $parompuan = new Keanggotaan();
        $parompuan->nama = $request->nama;
        $parompuan->jabatan = $request->jabatan;
        $parompuan->status = $request->status;
        $parompuan->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $parompuan->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('parompuan')->with('success', ' berhasil ditambahkan!');
    }



    public function edit_parompuan($id)
    {
        $parompuan = Keanggotaan::find($id);
        return view('admin.edit_parompuan', compact('parompuan'));
    }

    public function update_parompuan(Request $request, $id)
    {
        $parompuan = Keanggotaan::find($id);
        if (!$parompuan) {
            return redirect()->route('admin.parompuan')->with('error', 'parompuan tidak ditemukan');
        }

        $parompuan->nama = $request->input('nama');
        $parompuan->jabatan = $request->input('jabatan');
        $parompuan->status = $request->input('status');

        $parompuan->save();
        return redirect()->route('parompuan')->with('success', 'parompuan berhasil diperbarui');
    }


    // AMA
    public function create_ama()
    {
        return view(
            'admin.create_ama',
            [
                "title" => "ama"
            ]
        );
    }

    public function store_ama(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'id_seksi' => 'required|string|max:255',
        ]);

        // Membuat objek  baru
        $ama = new Keanggotaan();
        $ama->nama = $request->nama;
        $ama->jabatan = $request->jabatan;
        $ama->status = $request->status;
        $ama->id_seksi = $request->id_seksi;
        // Jika ada field lain yang perlu disimpan, tambahkan di sini

        // Simpan objek  ke dalam database
        $ama->save();

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan
        return redirect()->route('ama')->with('success', ' berhasil ditambahkan!');
    }

    public function edit_ama($id)
    {
        $ama = Keanggotaan::find($id);
        return view('admin.edit_ama', compact('ama'));
    }

    public function update_ama(Request $request, $id)
    {
        $ama = Keanggotaan::find($id);
        if (!$ama) {
            return redirect()->route('admin.ama')->with('error', 'ama tidak ditemukan');
        }

        $ama->nama = $request->input('nama');
        $ama->jabatan = $request->input('jabatan');
        $ama->status = $request->input('status');

        $ama->save();
        return redirect()->route('ama')->with('success', 'ama berhasil diperbarui');
    }
}
