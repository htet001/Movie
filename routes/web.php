<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/movie', [MovieController::class, 'index']);
Route::post('/movie/create', [MovieController::class, 'store']);
Route::get('/movie/create', [MovieController::class, 'create']);
Route::get('/movie/{id}/detail', [MovieController::class, 'show'])->name('movie.show');
Route::post('/movie/edit', [MovieController::class, 'edit']);

Route::get('/theater', [TheaterController::class, 'index']);

Route::get('/show/{id}/cinema', [CinemaController::class, 'show']);

Route::get('/booking', [BookingController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/payment', [PaymentController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard/movie', [AdminController::class, 'movie']);

Route::get('/bookAndBuy', [BookingController::class, 'show']);
