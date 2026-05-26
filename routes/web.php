<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/anggota', [AnggotaController::class, 'index'])->name('index');
Route::get('create', [AnggotaController::class, 'create'])->name('create');