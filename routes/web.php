<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonanteController;
use App\Http\Controllers\PuntoDonacionController;


Route::redirect('/', '/dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    // Donaciones: vista propia en su carpeta (no redirección)
    Route::view('/donaciones', 'donaciones.index')->name('donaciones');
    Route::view('/inventario', 'inventario.index')->name('inventario');
    Route::view('/pedidos', 'pedidosayuda.index')->name('pedidos');
    Route::view('/paquetes', 'paquetes.index')->name('paquetes');

    // Perfil (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Alias para el menú AdminLTE
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.show');

    // (Opcional) CRUD de usuarios
    Route::resource('users', UserController::class);
    Route::resource('campaigns', CampaignController::class);

    Route::resource('donantes', DonanteController::class);
    Route::resource('puntosdonacion', PuntoDonacionController::class);

});

require __DIR__.'/auth.php';