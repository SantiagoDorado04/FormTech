<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Docentes\DocentesComponent;
use App\Livewire\Admin\Instituciones\InstitucionesComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/docentes', DocentesComponent::class)->name('docentes');
    Route::get('/instituciones', InstitucionesComponent::class)->name('instituciones');
});



require __DIR__ . '/auth.php';
