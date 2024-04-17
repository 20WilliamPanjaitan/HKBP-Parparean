<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BabtisController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JadwalIbadahController;
use App\Http\Controllers\JemaatBaruController;
use App\Http\Controllers\JemaatPindahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LayananController;
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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/acara', [AcaraController::class, 'index']);
Route::get('/babtis', [BabtisController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/jadwal ibadah', [JadwalIbadahController::class, 'index']);
Route::get('/jemaat baru', [JemaatBaruController::class, 'index']);
Route::get('/jemaat pindah', [JemaatPindahController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/naik sidi', [NaikSidiController::class, 'index']);
Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pernikahan', [PernikahanController::class, 'index']);
Route::get('/pranikah', [PraNikahController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/tingting', [TingtingController::class, 'index']);
