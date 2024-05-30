<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attivitas;
use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\PrenotazioniController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/homepage', AttivitaController::class);
    Route::resource('/prenotazioni', PrenotazioniController::class);
    Route::resource('/attivita', AttivitaController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /* Route::get('/dashboard', function () {
        return redirect('/homepage');
    }); */
});




require __DIR__.'/auth.php';
