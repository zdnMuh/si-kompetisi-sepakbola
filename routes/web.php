<?php

use App\Http\Controllers\KlasmenController;
use App\Http\Controllers\KlubController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

// clubs
Route::get('/klub', [KlubController::class, 'index']);
Route::get('/klub/tambah', [KlubController::class, 'create']);
Route::post('/klub/store', [KlubController::class, 'store']);
Route::get('/klub/edit/{id}', [KlubController::class, 'edit']);
Route::put('/klub/update/{id}', [KlubController::class, 'update']);
Route::get('/klub/destroy/{id}', [KlubController::class, 'destroy']);
Route::get('/klub/cetak', [KlubController::class, 'cetak_pdf']);

// pemains
Route::get('/pemain', [PemainController::class, 'index']);
Route::get('/pemain/tambah', [PemainController::class, 'create']);
Route::post('/pemain/store', [PemainController::class, 'store']);
Route::get('/pemain/edit/{id}', [PemainController::class, 'edit']);
Route::put('/pemain/update/{id}', [PemainController::class, 'update']);
Route::get('/pemain/destroy/{id}', [PemainController::class, 'destroy']);
Route::get('/pemain/cetak', [PemainController::class, 'cetak_pdf']);

// panitias
Route::get('/panitia', [PanitiaController::class, 'index']);
Route::get('/panitia/tambah', [PanitiaController::class, 'create']);
Route::post('/panitia/store', [PanitiaController::class, 'store']);
Route::get('/panitia/edit/{id}', [PanitiaController::class, 'edit']);
Route::put('/panitia/update/{id}', [PanitiaController::class, 'update']);
Route::get('/panitia/destroy/{id}', [PanitiaController::class, 'destroy']);
Route::get('/panitia/cetak', [PanitiaController::class, 'cetak_pdf']);

// klasmens
Route::get('/klasmen', [KlasmenController::class, 'index']);
Route::get('/klasmen/tambah', [KlasmenController::class, 'create']);
Route::post('/klasmen/store', [KlasmenController::class, 'store']);
Route::get('/klasmen/edit/{id}', [KlasmenController::class, 'edit']);
Route::put('/klasmen/update/{id}', [KlasmenController::class, 'update']);
Route::get('/klasmen/destroy/{id}', [KlasmenController::class, 'destroy']);
Route::get('/klasmen/cetak', [KlasmenController::class, 'cetak_pdf']);

// transaksis
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/tambah', [TransaksiController::class, 'create']);
Route::post('/transaksi/store', [TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::put('/transaksi/update/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksi/destroy/{id}', [TransaksiController::class, 'destroy']);
Route::get('/transaksi/cetak', [TransaksiController::class, 'cetak_pdf']);