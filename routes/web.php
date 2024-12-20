<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\ProfileController;
use App\Models\Laboratorium;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/data-laboratorium', [LaboratoriumController::class, 'index'])->name('laboratorium.index');
Route::get('/admin/tambah-laboratorium', [LaboratoriumController::class, 'create'])->name('laboratorium.create');
Route::post('/admin/tambah-laboratorium', [LaboratoriumController::class, 'store'])->name('laboratorium.store');
Route::get('/admin/edit-laboratorium/{id}', [LaboratoriumController::class, 'edit'])->name('laboratorium.edit');
Route::get('/admin/hapus-laboratorium/{id}', [LaboratoriumController::class, 'destroy'])->name('laboratorium.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
