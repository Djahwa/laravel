<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
    return "cek sisa stok untuk $a $b";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/djahwa', function () {
    return view('djahwa');
});

Route::get('mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('dosen', function () {
    $arrDosen = ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('/form', [PageController::class, 'index']);
Route::post('/process', [PageController::class, 'save']);

Route::get('/', 'MahasiswaController@index');