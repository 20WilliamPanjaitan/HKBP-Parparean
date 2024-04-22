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



Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/acara', [AcaraController::class, 'index']);
Route::get('/babtis', [BabtisController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/jadwal_ibadah', [JadwalIbadahController::class, 'index']);
Route::get('/jemaat_baru', [JemaatBaruController::class, 'index']);
Route::get('/jemaat_pindah', [JemaatPindahController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/naik_sidi', [NaikSidiController::class, 'index']);
Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pernikahan', [PernikahanController::class, 'index']);
Route::get('/pranikah', [PraNikahController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/tingting', [TingtingController::class, 'index']);

Route::get('/diakonia', [DiakoniaController::class, 'index']);
Route::get('/marturia', [MarturiaControler::class, 'index']);
Route::get('/koinonia', [KoinoniaController::class, 'index']);

Route::get('/dewan_koinonia', [KoinoniaController::class, 'dewan_koinonia']);
Route::get('/sekolah_minggu', [KoinoniaController::class, 'sekolah_minggu']);
Route::get('/remaja', [KoinoniaController::class, 'remaja']);
Route::get('/naposo', [KoinoniaController::class, 'naposo']);
Route::get('/parompuan', [KoinoniaController::class, 'parompuan']);
Route::get('/ama', [KoinoniaController::class, 'ama']);
Route::get('/lansia', [KoinoniaController::class, 'lansia']);

Route::get('/dewan_marturia', [MarturiaControler::class, 'dewan_marturia']);
Route::get('/sending', [MarturiaControler::class, 'sending']);
Route::get('/tim_doa', [MarturiaControler::class, 'tim_doa']);
Route::get('/musik', [MarturiaControler::class, 'multi_media']);
Route::get('/multi_media', [MarturiaControler::class, 'multi_media']);

Route::get('/dewan_diakonia', [DiakoniaController::class, 'dewan_diakonia']);
Route::get('/sosial', [DiakoniaController::class, 'sosial']);
Route::get('/pendidikan', [DiakoniaController::class, 'pendidikan']);
Route::get('/kesehatan', [DiakoniaController::class, 'kesehatan']);
Route::get('/kemasyarakatan', [DiakoniaController::class, 'kemasyarakatan']);
