<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');
    Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');
    Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');
    Route::post('/carros/{carro}', [CarroController::class, 'show'])->name('carros.show');
    Route::get('/carros/{carro}/edit', [CarroController::class, 'edit'])->name('carros.edit');
    Route::put('/carros/{carro}', [CarroController::class, 'update'])->name('carros.update');
    Route::delete('/carros/{carro}', [CarroController::class, 'destroy'])->name('carros.destroy');

});

require __DIR__.'/auth.php';
