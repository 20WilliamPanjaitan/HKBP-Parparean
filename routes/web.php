<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BabtisController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DiakoniaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JadwalIbadahController;
use App\Http\Controllers\JemaatBaruController;
use App\Http\Controllers\JemaatPindahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KoinoniaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MarturiaControler;
use App\Http\Controllers\NaikSidiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\PraNikahController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TingtingController;
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

    Route::get('admin/index', [BerandaController::class, 'index_admin']);


    Route::get('/admin/acara', [AcaraController::class, 'index_admin'])->name('admin_acara');
    Route::get('admin/tambah_acara', [AcaraController::class, 'create']);
    Route::post('admin/tambah_acara', [AcaraController::class, 'store']);
    Route::delete('admin/hapus/{acara}', [AcaraController::class, 'delete_acara'])->name('hapus_acara');


    Route::get('admin/babtis', [BabtisController::class, 'index_admin']);


    Route::get('/admin/berita', [BeritaController::class, 'index_berita'])->name('admin.berita');
    Route::get('admin/create_berita', [BeritaController::class, 'create']);
    Route::post('admin/store_berita', [BeritaController::class, 'store'])->name('admin.store.berita');

    Route::get('admin/galeri', [GaleriController::class, 'index_admin'])->name('admin.galeri');
    Route::get('admin/create_galeri', [GaleriController::class, 'create']);
    Route::post('admin/store_galeri', [GaleriController::class, 'store'])->name('admin.store.galeri');


    Route::get('admin/jemaat_pindah', [JemaatPindahController::class, 'index_admin']);


    Route::get('admin/jemaat_baru', [JemaatBaruController::class, 'index_admin']);


    Route::get('admin/pengumuman', [PengumumanController::class, 'index_admin'])->name('admin.pengumuman');
    Route::get('admin/create_pengumuman', [PengumumanController::class, 'create']);
    Route::post('admin/store_pengumuman', [PengumumanController::class, 'store'])->name('admin.store.pengumuman');
    Route::get('admin/edit_pengumuman', [PengumumanController::class, 'edit'])->name('admin.edit_pengumuman');



    Route::get('admin/naik_sidi', [NaikSidiController::class, 'index_admin']);


    Route::get('admin/pernikahan', [PernikahanController::class, 'index_admin']);


    Route::get('admin/pranikah', [PraNikahController::class, 'index_admin']);
});



Route::get('login', function () {
    return view('login');
});



Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);




Route::get('/acara', [AcaraController::class, 'index']);






Route::get('/babtis', [BabtisController::class, 'index']);


Route::get('/berita', [BeritaController::class, 'index']);


Route::get('admin/edit_berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('admin/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');


Route::get('admin/edit_acara/{id}', [AcaraController::class, 'edit'])->name('acara.edit');
Route::put('admin/acara/{id}', [AcaraController::class, 'update'])->name('acara.update');


// Route::get('admin/edit_acara/{id}', [AcaraController::class, 'edit'])->name('acara.edit');
// Route::put('admin/acara/{id}', [AcaraController::class, 'update'])->name('acara.update');




Route::get('/galeri', [GaleriController::class, 'index']);



Route::get('/jadwal_ibadah', [JadwalIbadahController::class, 'index']);
Route::get('/jemaat_baru', [JemaatBaruController::class, 'index']);


Route::get('/jemaat_pindah', [JemaatPindahController::class, 'index']);



Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/naik_sidi', [NaikSidiController::class, 'index']);



Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('admin/edit_pengumuman/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
Route::put('admin/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');


Route::get('/pernikahan', [PernikahanController::class, 'index']);


Route::get('/pranikah', [PraNikahController::class, 'index']);

Route::get('/tentang', [TentangController::class, 'index']);

Route::get('/diakonia', [DiakoniaController::class, 'index']);
Route::get('/marturia', [MarturiaControler::class, 'index']);
Route::get('/koinonia', [KoinoniaController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
