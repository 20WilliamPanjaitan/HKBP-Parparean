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

Route::get('admin/tambah', function () {
    return view('admin/tambah');
});


Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('admin/index', [BerandaController::class, 'index_admin']);




Route::get('/acara', [AcaraController::class, 'index']);
Route::get('admin/acara', [AcaraController::class, 'index_admin']);
Route::get('admin/tambah_acara', [AcaraController::class, 'create']);
Route::post('admin/tambah_acara', [AcaraController::class, 'store']);
Route::get('admin/{id}/edit_acara', [AcaraController::class, 'edit_acara']);





Route::get('/babtis', [BabtisController::class, 'index']);
Route::get('admin/babtis', [BabtisController::class, 'index_admin']);


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/admin/berita', [BeritaController::class, 'admin_index']);



Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('admin/galeri', [GaleriController::class, 'index_admin']);


Route::get('/jadwal_ibadah', [JadwalIbadahController::class, 'index']);
Route::get('/jemaat_baru', [JemaatBaruController::class, 'index']);
Route::get('admin/jemaat_baru', [JemaatBaruController::class, 'index_admin']);

Route::get('/jemaat_pindah', [JemaatPindahController::class, 'index']);
Route::get('admin/jemaat_pindah', [JemaatPindahController::class, 'index_admin']);


Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('admin/kegiatan', [KegiatanController::class, 'index_admin']);


Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/naik_sidi', [NaikSidiController::class, 'index']);
Route::get('admin/naik_sidi', [NaikSidiController::class, 'index_admin']);


Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('admin/pengumuman', [PengumumanController::class, 'index_admin']);

Route::get('/pernikahan', [PernikahanController::class, 'index']);
Route::get('admin/pernikahan', [PernikahanController::class, 'index_admin']);

Route::get('/pranikah', [PraNikahController::class, 'index']);
Route::get('admin/pranikah', [PraNikahController::class, 'index_admin']);

Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/tingting', [TingtingController::class, 'index']);

Route::get('/diakonia', [DiakoniaController::class, 'index']);
Route::get('/marturia', [MarturiaControler::class, 'index']);
Route::get('/koinonia', [KoinoniaController::class, 'index']);
