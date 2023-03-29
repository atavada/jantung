<?php

use App\Http\Controllers\BayesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\KmeanskeduaController;
use Illuminate\Support\Facades\Auth;

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

Route::post('/kmeans', [KmeansController::class, 'output'])->name('kmeans');
Route::get('/kmeans', [KmeansController::class, 'output'])->name('kmeans');


Route::get('/bayes', [BayesController::class, 'output'])->name('bayes');
