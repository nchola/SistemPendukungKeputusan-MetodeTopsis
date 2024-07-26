<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\SubKriteriaController;
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


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['checkAuth'])->group(function () {
    Route::get('/', function () {
        return view('layouts.index');
    })->name('main');
    Route::resource('users', UserController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('sub_kriteria', SubKriteriaController::class);
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('penilaian', PenilaianController::class);
    Route::get('perhitungan',[PerhitunganController::class,'index'])->name('perhitungan.index');
    Route::get('perhitungan/print',[PerhitunganController::class,'print'])->name('perhitungan.print');
});
