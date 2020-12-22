<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\laporanController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('home',HomeController::class);
Route::resource('penduduks',PendudukController::class);
Route::resource('kk',KartuKeluargaController::class);
Route::resource('laporan',laporanController::class);