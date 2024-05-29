<?php

use App\Http\Controllers\PrakerjaController;
use Illuminate\Support\Facades\Route;


Route::get('prakerja', [PrakerjaController::class, 'index'])->name('prakerja');
Route::get('tambah', [PrakerjaController::class, 'tambah'])->name('tambah');
Route::post('tambahdata', [PrakerjaController::class, 'prosestambah'])->name('prosestambah');
Route::get('hapus/{id}', [PrakerjaController::class, 'hapus'])->name('hapus');
Route::get('edit/{id}', [PrakerjaController::class, 'edit'])->name('edit');
Route::post('prosesedit/{id}', [PrakerjaController::class, 'prosesedit'])->name('prosesedit');
