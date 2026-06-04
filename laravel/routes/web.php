<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
    
});

Route::resource('/fakultas', FakultasController::class)
    ->parameters([
        'fakultas' => 'fakultas'
    ]);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/periode', PeriodeController::class);  
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);