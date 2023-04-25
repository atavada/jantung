<?php

use App\Http\Controllers\BayesController;
use App\Http\Controllers\ConfusionController;
use App\Http\Controllers\ConfusionKmeansController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\HomeController;
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
    return view('user.index');
});

Auth::routes();

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// kmeans
Route::get('/kmeans', [KmeansController::class, 'index'])->name('kmeans');
Route::post('/kmeansOutput', [KmeansController::class, 'output'])->name('kmeansOutput');

// naives bayes
Route::get('/bayes', [BayesController::class, 'index'])->name('bayes');
Route::post('/bayesOutput', [BayesController::class, 'output'])->name('outputBayes');

// confusion matriks kmeans
Route::get('/confusion-kmeans', [ConfusionKmeansController::class, 'confusionKmeans'])->name('confusionKmeans');

// confusion matriks bayes
Route::get('/confusion-bayes', [ConfusionController::class, 'confusionBayes'])->name('confusionBayes');
