<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\StrukturalController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EskulController;






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

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

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