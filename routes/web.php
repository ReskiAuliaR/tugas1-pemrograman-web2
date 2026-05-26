
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', [AnggotaController::class, 'index'])->name('index');
Route::get('/create', [AnggotaController::class, 'create'])->name('create');
Route::post('/store', [AnggotaController::class, 'store'])->name('store');