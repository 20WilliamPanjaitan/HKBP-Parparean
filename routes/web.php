<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BabtisController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DiakoniaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\JadwalIbadahController;
use App\Http\Controllers\JemaatBaruController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\JemaatPindahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KoinoniaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MarturiaControler;
use App\Http\Controllers\NaikSidiController;
use App\Http\Controllers\ParhaladoController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\PraNikahController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\TataIbadahController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php

Route::middleware([Admin::class])->group(function () {

    Route::get('admin/index', [BerandaController::class, 'index_admin'])->name('admin.index');

    Route::get('admin/kontak', [KontakController::class, 'index_admin'])->name('admin.kontak');

    // PARHALADO
    Route::get('admin/parhalado', [ParhaladoController::class, 'parhalado_admin'])->name('admin.parhalado');
    Route::get('admin/create_parhalado', [ParhaladoController::class, 'create']);
    Route::post('admin/store_parhalado', [ParhaladoController::class, 'store'])->name('admin.store.parhalado');

    Route::get('admin/jemaat', [JemaatController::class, 'jemaat_admin']);


    Route::post('/jemaat/tolak/{id}', [JemaatBaruController::class, 'tolak'])->name('jemaat.tolak');
    Route::post('/jemaat/setuju/{id}', [JemaatBaruController::class, 'setuju'])->name('jemaat.setuju');



    Route::get('/admin/acara', [AcaraController::class, 'index_admin'])->name('admin_acara');
    Route::get('admin/tambah_acara', [AcaraController::class, 'create']);
    Route::post('admin/tambah_acara', [AcaraController::class, 'store']);
    Route::delete('admin/hapus/{acara}', [AcaraController::class, 'delete_acara'])->name('hapus_acara');


    Route::get('admin/babtis', [BabtisController::class, 'index_admin']);


    Route::get('/admin/berita', [BeritaController::class, 'index_berita'])->name('admin.berita');
    Route::get('/admin/renungan_harian', [RenunganController::class, 'index'])->name('admin.renungan_harian');

    Route::get('admin/create_berita', [BeritaController::class, 'create']);
    Route::post('admin/store_berita', [BeritaController::class, 'store'])->name('admin.store.berita');


    Route::get('/admin/index', [TataIbadahController::class, 'index_tata_ibadah'])->name('admin.index');


    Route::get('admin/galeri', [GaleriController::class, 'index_admin'])->name('admin.galeri');
    Route::get('admin/create_galeri', [GaleriController::class, 'create']);
    Route::post('admin/store_galeri', [GaleriController::class, 'store'])->name('admin.store.galeri');


    Route::get('admin/jemaat_pindah', [JemaatPindahController::class, 'index_admin']);


    Route::get('admin/jemaat_baru', [JemaatBaruController::class, 'index_admin'])->name('jemaat_baru');


    Route::post('/approve-request/{id}', [JemaatBaruController::class, 'approve'])->name('request.approve');
    Route::post('/reject-request/{id}', [JemaatBaruController::class, 'reject'])->name('request.reject');




    Route::get('admin/create_renungan', [RenunganController::class, 'create_renungan'])->name('renungan ');
    Route::post('admin/store_renungan', [RenunganController::class, 'store_renungan'])->name('admin.store.renungan');


    Route::get('admin/pengumuman', [PengumumanController::class, 'index_admin'])->name('admin.pengumuman');
    Route::get('admin/create_pengumuman', [PengumumanController::class, 'create']);
    Route::post('admin/store_pengumuman', [PengumumanController::class, 'store'])->name('admin.store.pengumuman');
    Route::get('admin/edit_pengumuman', [PengumumanController::class, 'edit'])->name('admin.edit_pengumuman');


    Route::get('admin/sekolah_minggu', [KoinoniaController::class, 'sekolah_minggu'])->name('sekolah_minggu');
    Route::get('admin/remaja', [KoinoniaController::class, 'remaja'])->name('remaja');
    Route::get('admin/naposo', [KoinoniaController::class, 'naposo'])->name('naposo');
    Route::get('admin/parompuan', [KoinoniaController::class, 'parompuan'])->name('parompuan');
    Route::get('admin/ama', [KoinoniaController::class, 'ama'])->name('ama');

    Route::get('admin/create_sekolah_minggu', [KoinoniaController::class, 'create_sekolah_minggu']);
    Route::post('admin/store_sekolah_minggu', [KoinoniaController::class, 'store_sekolah_minggu'])->name('admin.store.sekolah_minggu');

    Route::get('admin/create_remaja', [KoinoniaController::class, 'create_remaja']);
    Route::post('admin/store_remaja', [KoinoniaController::class, 'store_remaja'])->name('admin.store.remaja');

    Route::get('admin/create_naposo', [KoinoniaController::class, 'create_naposo']);
    Route::post('admin/store_naposo', [KoinoniaController::class, 'store_naposo'])->name('admin.store.naposo');

    Route::get('admin/create_ama', [KoinoniaController::class, 'create_ama']);
    Route::post('admin/store_ama', [KoinoniaController::class, 'store_ama'])->name('admin.store.ama');

    Route::get('admin/create_parompuan', [KoinoniaController::class, 'create_parompuan']);
    Route::post('admin/store_parompuan', [KoinoniaController::class, 'store_parompuan'])->name('admin.store.parompuan');

    Route::get('admin/create_sending', [MarturiaControler::class, 'create_sending']);
    Route::post('admin/store_sending', [MarturiaControler::class, 'store_sending'])->name('admin.store.sending');

    Route::get('admin/create_musik', [MarturiaControler::class, 'create_musik']);
    Route::post('admin/store_musik', [MarturiaControler::class, 'store_musik'])->name('admin.store.musik');

    Route::get('admin/create_sosial', [DiakoniaController::class, 'create_sosial']);
    Route::post('admin/store_sosial', [DiakoniaController::class, 'store_sosial'])->name('admin.store.sosial');

    Route::get('admin/create_kemasyarakatan', [DiakoniaController::class, 'create_kemasyarakatan']);
    Route::post('admin/store_kemasyarakatan', [DiakoniaController::class, 'store_kemasyarakatan'])->name('admin.store.kemasyarakatan');

    Route::get('admin/sending', [MarturiaControler::class, 'sending'])->name('sending');
    Route::get('admin/musik', [MarturiaControler::class, 'musik'])->name('musik');

    Route::get('admin/sosial', [DiakoniaController::class, 'sosial'])->name('sosial');
    Route::get('admin/kemasyarakatan', [DiakoniaController::class, 'kemasyarakatan'])->name('kemasyarakatan');


    Route::get('admin/create_tata_ibadah', [TataIbadahController::class, 'create'])->name('create.tata_ibadah');
    Route::post('admin/store_tata_ibadah', [TataIbadahController::class, 'store'])->name('admin.store.tata_ibadah');

    Route::get('admin/create_ibadah', [IbadahController::class, 'create'])->name('admin.create_ibadah');
    Route::post('admin/store_ibadah', [IbadahController::class, 'store'])->name('admin.store.ibadah');


    Route::get('admin/naik_sidi', [NaikSidiController::class, 'index_admin']);


    Route::get('admin/pernikahan', [PernikahanController::class, 'index_admin']);


    Route::get('admin/pranikah', [PraNikahController::class, 'index_admin']);
});



Route::get('tata_ibadah/{id}', function () {
    return view('tata_ibadah');
});



Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);




Route::get('/acara', [AcaraController::class, 'index']);






Route::get('/babtis', [BabtisController::class, 'index']);


Route::get('/berita', [BeritaController::class, 'index']);

Route::get('admin/edit_berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('admin/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');

Route::get('admin/edit_jemaat/{id}', [JemaatBaruController::class, 'edit'])->name('jemaat.edit');
Route::put('admin/jemaat/{id}', [JemaatBaruController::class, 'update_jemaat'])->name('jemaat.update');


Route::get('admin/edit_sekolah_minggu/{id}', [KoinoniaController::class, 'edit_sekolah_minggu'])->name('sekolah_minggu.edit');
Route::put('admin/sekolah_minggu/{id}', [KoinoniaController::class, 'update_sekolah_minggu'])->name('sekolah_minggu.update');

Route::get('admin/edit_remaja/{id}', [KoinoniaController::class, 'edit_remaja'])->name('remaja.edit');
Route::put('admin/remaja/{id}', [KoinoniaController::class, 'update_remaja'])->name('remaja.update');

Route::get('admin/edit_naposo/{id}', [KoinoniaController::class, 'edit_naposo'])->name('naposo.edit');
Route::put('admin/naposo/{id}', [KoinoniaController::class, 'update_naposo'])->name('naposo.update');

Route::get('admin/edit_ama/{id}', [KoinoniaController::class, 'edit_ama'])->name('ama.edit');
Route::put('admin/ama/{id}', [KoinoniaController::class, 'update_ama'])->name('ama.update');

Route::get('admin/edit_parompuan/{id}', [KoinoniaController::class, 'edit_parompuan'])->name('parompuan.edit');
Route::put('admin/parompuan/{id}', [KoinoniaController::class, 'update_parompuan'])->name('parompuan.update');

Route::get('admin/edit_sending/{id}', [MarturiaControler::class, 'edit_sending'])->name('sending.edit');
Route::put('admin/sending/{id}', [MarturiaControler::class, 'update_sending'])->name('sending.update');

Route::get('admin/edit_musik/{id}', [MarturiaControler::class, 'edit_musik'])->name('musik.edit');
Route::put('admin/musik/{id}', [MarturiaControler::class, 'update_musik'])->name('musik.update');

Route::get('admin/edit_sosial/{id}', [DiakoniaController::class, 'edit_sosial'])->name('sosial.edit');
Route::put('admin/sosial/{id}', [DiakoniaController::class, 'update_sosial'])->name('sosial.update');

Route::get('admin/edit_kemasyarakatan/{id}', [DiakoniaController::class, 'edit_kemasyarakatan'])->name('kemasyarakatan.edit');
Route::put('admin/kemasyarakatan/{id}', [DiakoniaController::class, 'update_kemasyarakatan'])->name('kemasyarakatan.update');


Route::get('admin/edit_parhalado/{id}', [ParhaladoController::class, 'edit'])->name('parhalado.edit');
Route::put('admin/parhalado/{id}', [ParhaladoController::class, 'update'])->name('parhalado.update');


Route::get('admin/edit_kontak/{id}', [KontakController::class, 'edit'])->name('kontak.edit');
Route::put('admin/kontak/{id}', [KontakController::class, 'update'])->name('kontak.update');


Route::get('admin/edit_acara/{id}', [AcaraController::class, 'edit'])->name('acara.edit');
Route::put('admin/acara/{id}', [AcaraController::class, 'update'])->name('acara.update');


Route::get('admin/edit_galeri/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
Route::put('admin/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');


Route::get('/galeri', [GaleriController::class, 'index']);



Route::get('/jadwal_ibadah', [JadwalIbadahController::class, 'index']);
Route::get('/jemaat_baru', [JemaatBaruController::class, 'index']);
Route::post('/layanan', [JemaatBaruController::class, 'store'])->name('jemaat.store');
Route::post('admin/store_remaja', [KoinoniaController::class, 'store_remaja'])->name('admin.store.remaja');


Route::post('store_ibadah', [JemaatBaruController::class, 'store'])->name('store.jemaat_baru');


Route::get('/jemaat_pindah', [JemaatPindahController::class, 'index']);


Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/naik_sidi', [NaikSidiController::class, 'index']);



Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('admin/edit_pengumuman/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
Route::put('admin/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');


Route::get('/pernikahan', [PernikahanController::class, 'index']);


Route::get('/pranikah', [PraNikahController::class, 'index']);
Route::get('/pranikah', [PraNikahController::class, 'index']);
Route::post('/pranikah', [PraNikahController::class, 'store'])->name('pranikah.store');


Route::get('/tentang', [TentangController::class, 'index']);

Route::get('/diakonia', [DiakoniaController::class, 'index']);
Route::get('/marturia', [MarturiaControler::class, 'index']);
Route::get('/koinonia', [KoinoniaController::class, 'index']);



Route::get('/view/pdf/{id}', [TataIbadahController::class, 'view_pdf'])->name('view_tata_ibadah');
Route::get('/download/pdf/{id}', [TataIbadahController::class, 'download_pdf'])->name('download_tata_ibadah');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
