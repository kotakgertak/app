<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'genre', 'middleware' => 'auth'], function () {
    Route::get('/comedy', [GenreController::class, 'show'])->name('genre.comedy');
});

Route::get('/nussa', [FilmController::class, 'show'])->name('nussa');