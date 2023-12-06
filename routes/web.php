<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/movie', [MovieController::class, 'index']);
Route::post('/movie/create', [MovieController::class, 'store']);
Route::get('/movie/create', [MovieController::class, 'create']);

Route::get('/show/{id}/theater', [TheaterController::class, 'show']);

Route::get('/show/{id}/cinema', [CinemaController::class, 'show']);


// Route::group(array('prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'manager'), function () {

//     Route::get('/', [AdminController::class, 'index']);
// });
