
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DivisiController;  

Route::get('/', [AnggotaController::class, 'index'])->name('index');
Route::get('/create', [AnggotaController::class, 'create'])->name('create');
Route::post('/store', [AnggotaController::class, 'store'])->name('store');
Route::get('/edit/{anggota}', [AnggotaController::class, 'edit'])->name('edit');
Route::put('/update/{anggota}', [AnggotaController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [AnggotaController::class, 'destroy'])->name('destroy');

Route::resource('divisi', DivisiController::class);
