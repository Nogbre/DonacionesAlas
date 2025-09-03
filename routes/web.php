<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::redirect('/', '/dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Perfil (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Alias para el menú AdminLTE
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.show');

    // (Opcional) CRUD de usuarios
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';