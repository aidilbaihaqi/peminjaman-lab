<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Models\Laboratorium;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Laboratorium
Route::controller(LaboratoriumController::class)->group(function() {
    Route::get('/admin/data-laboratorium', 'index')->name('laboratorium.index');
    Route::get('/admin/tambah-laboratorium', 'create')->name('laboratorium.create');
    Route::post('/admin/tambah-laboratorium', 'store')->name('laboratorium.store');
    Route::get('/admin/edit-laboratorium/{id}', 'edit')->name('laboratorium.edit');
    Route::post('/admin/edit-laboratorium/{id}', 'update')->name('laboratorium.update');
    Route::get('/admin/hapus-laboratorium/{id}', 'destroy')->name('laboratorium.destroy');
}); 

// Peminjaman
Route::controller(PeminjamanController::class)->group(function() {
    Route::get('/admin/data-peminjaman', 'index')->name('peminjaman.index');
    Route::get('/admin/tambah-peminjaman', 'create')->name('peminjaman.create');
    Route::post('/admin/tambah-peminjaman', 'store')->name('peminjaman.store');
    Route::get('/admin/edit-peminjaman/{id}', 'edit')->name('peminjaman.edit');
    Route::post('/admin/edit-peminjaman/{id}', 'update')->name('peminjaman.update');
    Route::get('/admin/hapus-peminjaman/{id}', 'destroy')->name('peminjaman.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
