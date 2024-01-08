<?php

use App\Http\Controllers\GaleriController;
use App\Models\Galeri;
use App\Http\Controllers\LokasiController;
use App\Models\Lokasi;
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
    $data = array(
        'galeri' => Galeri::all(),
        'lokasi' => Lokasi::all(),
    );
    return view('layout.master', $data);
});

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.show');
Route::resource('galeri', GaleriController::class);


Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi.show');
Route::resource('lokasi', LokasiController::class);