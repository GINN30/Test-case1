<?php

use App\Http\Controllers\CutiController;
use App\Http\Controllers\KaryawanController;
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
    return view('welcome');
});

Route::get('/home', function(){
    return view('home.index');
});
// Route Soal nomer 1
Route::get('/karyawan/first_three', [KaryawanController::class, 'firstThree'])->name('karyawan.first_three');
// Route Soal nomer 2
Route::get('/allcutis', [CutiController::class, 'allcutis'])->name('cuti.alldatas');
// Route Soal nomer 3
Route::get('/cuti/karyawan', [CutiController::class, 'moreone'])->name('cuti.moreone');
// ROute Endpoint Soal nomer 4
Route::get('/cuti/karyawan/sisa', [KaryawanController::class, 'sisaCuti'])->name('cuti.sisa');

Route::resource('karyawan', KaryawanController::class);
Route::resource('cuti', CutiController::class);
