<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD

Route::get('/kmeans', [KmeansController::class, 'kmeans']);
=======
Route::get('/kmeans', function () {
    return view('user.kmeans');
});
Route::get('/bayes', function () {
    return view('user.bayes');
});
>>>>>>> 7046c8e9a1e59015ca9b29f6132ca6870fc85282
