<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\KmeanskeduaController;

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

Route::get('/kmeans', [KmeansController::class, 'kmeans'])->name('kmeans');
<<<<<<< HEAD
Route::get('/cn', [KmeansController::class, 'cn']);
Route::get('/km', [KmeansController::class, 'km']);
Route::get('/cek', [KmeansController::class, 'cek']);

Route::get('/kmeans2', [KmeanskeduaController::class, 'kmeans2'])->name('kmeans2');

=======
>>>>>>> 61c8858a283f6b4a31d751e611f297cd742bd16e
Route::get('/bayes', function () {
    return view('user.bayes');
});
