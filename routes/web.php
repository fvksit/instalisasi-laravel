<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PerkalianController;

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
// Routing
// Route::get('/hello', function () {
//     return 'Hello World!';
// });
// Route::get('perkalian/{angka}', function ($angka) {
//     return 'Angka ' . $angka * 2;
// });

// controller
// Route::get('/hello', [HelloController::class, 'index']);
// Route::get('/perkalian/{perkalian}', [PerkalianController::class, 'index']);

Route::get('/perkalian', [PerkalianController::class, 'create'])->name('perkalian.form');
Route::get('/perkalian/hasil', [PerkalianController::class, 'store'])->name('perkalian.store');