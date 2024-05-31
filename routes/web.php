<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\StrukturalController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserguruController;
use App\Http\Controllers\UserstrukturalController;
use App\Http\Controllers\UsereskulController;
use App\Http\Controllers\UserjurusanController;





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
// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/artikel/{id}', [BerandaController::class, 'show']) ->name('beranda.show');

// Guru
Route::get('/guru', [UserguruController::class, 'index'])->name('guru');

// Struktural
Route::get('/struktural', [UserstrukturalController::class, 'index'])->name('struktural');

// Eskul
Route::get('/eskul', [UsereskulController::class, 'index'])->name('eskul');

// Jurusan
Route::get('/jurusan', [UserjurusanController::class, 'index'])->name('jurusan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function(){
// CRUD Jabatan
Route::resource('jabatan', JabatanController::class);

// CRUD Mapel
Route::resource('mapel', MapelController::class);

// CRUD Guru
Route::resource('guru', GuruController::class);

// CRUD Struktural
Route::resource('struktural', StrukturalController::class);

// CRUD Artikel
Route::resource('artikel', ArtikelController::class);

// CRUD Jurusan
Route::resource('jurusan', JurusanController::class);

// CRUD Eskul
Route::resource('eskul', EskulController::class);
});