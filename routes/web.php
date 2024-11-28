<?php

use App\Http\Controllers\DiretorController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('diretores', [DiretorController::class, 'index']);
Route::get('diretores/create', [DiretorController::class, 'create']);
Route::post('diretores', [DiretorController::class, 'store']);
Route::get('diretores/{id}/edit', [DiretorController::class, 'edit']);
Route::put('diretores/{id}', [DiretorController::class, 'update']);
Route::delete('diretores/{id}', [DiretorController::class, 'destroy']);

Route::get('filmes', [FilmeController::class, 'index']);
Route::get('filmes/create', [FilmeController::class, 'create']);
Route::post('filmes', [FilmeController::class, 'store']);
Route::get('filmes/{id}/edit', [FilmeController::class, 'edit']);
Route::put('filmes/{id}', [FilmeController::class, 'update']);
Route::delete('filmes/{id}', [FilmeController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
