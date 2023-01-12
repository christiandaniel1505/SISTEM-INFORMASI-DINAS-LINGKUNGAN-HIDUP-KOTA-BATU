<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuGaleriController;
use App\Http\Controllers\MenuBeritaController;
use App\Http\Controllers\MenuContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanPenataanController;
use App\Http\Controllers\KegiatanPengendalianController;
use App\Http\Controllers\KegiatanPersampahanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');

Route::get('/profil',[ProfilController::class,'index'])->name('profil');
Route::get('/profil-renja',[ProfilController::class,'renja'])->name('profil-renja');
Route::get('/profil-renstra',[ProfilController::class,'renstra'])->name('profil-renstra');
Route::get('/profil-sakip',[ProfilController::class,'sakip'])->name('profil-sakip');
Route::get('/profil-struktur-organisasi',[ProfilController::class,'struktur_organisasi'])->name('profil-struktur-organisasi');
Route::get('/profil-tupoksi',[ProfilController::class,'tupoksi'])->name('profil-tupoksi');
Route::get('/berita',[BeritaController::class,'index'])->name('berita');
Route::get('/galeri',[GaleriController::class,'index'])->name('galeri');
Route::get('/kegiatan-persampahan',[KegiatanController::class,'persampahan'])->name('kegiatan-persampahan');
Route::get('/kegiatan-penataan',[KegiatanController::class,'penataan'])->name('kegiatan-penataan');
Route::get('/kegiatan-pengendalian',[KegiatanController::class,'pengendalian'])->name('kegiatan-pengendalian');
Route::resource('/contact', ContactController::class);

Route::prefix('admin')
    //->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [HomeController::class, 'index'])
        ->name('dashboard');
        Route::resource('/menugaleri', MenuGaleriController::class);
        Route::resource('/menuberita', MenuBeritaController::class);
        Route::resource('/menucontact', MenuContactController::class);
        Route::resource('/kegiatanpenataan', KegiatanPenataanController::class);
        Route::resource('/kegiatanpengendalian', KegiatanPengendalianController::class);
        Route::resource('/kegiatanpersampahan', KegiatanPersampahanController::class);
    });
Auth::routes();