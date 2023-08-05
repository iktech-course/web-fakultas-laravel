<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.landing.index');
})->name('landing.beranda');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('landing.berita.index');
Route::get('/berita-detail', [App\Http\Controllers\BeritaController::class, 'show'])->name('landing.berita.show');
Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index'])->name('landing.fasilitas.index');
Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('landing.pendaftaran.index');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('landing.kontak.index');
Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index'])->name('landing.dosen.index');
Route::get('/dosen-detail', [App\Http\Controllers\DosenController::class, 'show'])->name('landing.dosen.show');



Auth::routes();

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);
});

