<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\MKPengampuController;
use App\Http\Controllers\Admin\UserCotroller as AdminUserContoller;
use App\Http\Controllers\Admin\MatakuliahCotroller as AdminMatakuliah;
use App\Http\Controllers\Admin\DosenController as AdminDosenController;
use App\Http\Controllers\Admin\PesanController as AdminPesanController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanContoller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.landing.index');
// })->name('landing.beranda');


Route::get('/', [LandingController::class, 'index'])->name('landing.beranda');
Route::get('/berita', [BeritaController::class, 'index'])->name('landing.berita.index');
Route::get('/berita-detail/{id}', [BeritaController::class, 'show'])->name('landing.berita.show');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('landing.fasilitas.index');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('landing.pendaftaran.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('landing.kontak.index');
Route::get('/dosen', [DosenController::class, 'index'])->name('landing.dosen.index');
Route::get('/dosen-detail', [DosenController::class, 'show'])->name('landing.dosen.show');
Route::get('/profil-fakultas', [ProfilController::class, 'index'])->name('landing.profil.index');
Route::get('/prodi', [ProdiController::class, 'index'])->name('landing.prodi.index');
Route::get('/prodi/ti', [ProdiController::class, 'show_ti'])->name('landing.prodi.show-ti');
Route::get("/prodi/si", [ProdiController::class, 'show_si'])->name('landing.prodi.show-si');
Route::get('/kegiatan-a' ,[KegiatanController::class, 'index'])->name('landing.kegiatan.index');
Route::get('/kegiatan-s' ,[KegiatanController::class, 'show'])->name('landing.kegiatan.show');
Route::post('/kontak', [KontakController::class, 'store'])->name('landing.kontak.store');






Auth::routes();

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('dosen', AdminDosenController::class);
    Route::resource('berita', AdminBeritaController::class);
    Route::resource('matakuliah', AdminMatakuliah::class);
    Route::resource('kegiatan', AdminKegiatanContoller::class);
    Route::resource('pesan', AdminPesanController::class);
    Route::resource('user', AdminUserContoller::class);
    Route::resource('kontak', AdminKontakController::class);
    Route::resource('mkpengampu', MKPengampuController::class);
    Route::resource('publikasi', PublikasiController::class);

});

