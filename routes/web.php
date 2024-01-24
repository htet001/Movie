<?php

use App\Models\Admin;
use App\Models\TimeTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SeatController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\CinemaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TimeTableController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/', [HomeController::class, 'index']);

//User
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'loginShow'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/user', [UserController::class, 'index']);

//Book
Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
Route::get('/bookingSuccess', [BookingController::class, 'bookingSuccess'])->name('bookingSuccess');

//Cinema
Route::get('/{movieId}/{cinemaId}/choosingRoom', [CinemaController::class, 'choosingRoom'])->name('theaters.choosingRoom');

//Payment
Route::get('/payment', [PaymentController::class, 'index']);

//Movie
Route::get('/movie', [MovieController::class, 'index']);
Route::get('/', [MovieController::class, 'upcoming']);
Route::get('/movie/detail/{id}', [MovieController::class, 'show']);

Route::get('/admin', [AdminController::class, 'showLogin']);
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/logout', [AdminController::class, 'logout']);

//Choosing DateTime
Route::get('{movieId}/{roomId}/choosingDateTime', [TimetableController::class, 'choosingDate'])->name('theaters.choosingDate');

Route::post('{movieId}/{roomId}/choosingDateTime', [TimetableController::class, 'choosingDateTime'])->name('choosingDate');


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Movie
    Route::get('/movielist', [MovieController::class, 'movielist'])->name('movielist');
    Route::post('/movie/create', [MovieController::class, 'store'])->name('movie.create');
    Route::get('/movie/create', [MovieController::class, 'create']);
    Route::get('/movie/edit/{id}', [MovieController::class, 'edit']);
    Route::post('/movie/update/{id}', [MovieController::class, 'update']);
    Route::get('/movie/delete/{id}', [MovieController::class, 'delete']);

    //Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');

    //Category
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
    Route::get('/categorylist', [CategoryController::class, 'categorylist'])->name('categorylist');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    //Cinema
    Route::get('/theater/create', [CinemaController::class, 'create'])->name('theater.index');
    Route::post('/theater/create', [CinemaController::class, 'store'])->name('theater.create');
    Route::get('/theaterlist', [CinemaController::class, 'theaterlist'])->name('theaterlist');
    Route::get('/theater/edit/{id}', [CinemaController::class, 'edit'])->name('theater.edit');
    Route::post('/theater/update/{id}', [CinemaController::class, 'update'])->name('theater.update');
    Route::get('/theater/delete/{id}', [CinemaController::class, 'destroy'])->name('theater.delete');
    Route::get('/theaters/{cinemaId}/viewRooms', [CinemaController::class, 'viewRooms'])->name('theaters.viewRooms');

    //Room
    Route::get('/cinema/create', [RoomController::class, 'create'])->name('cinema.index');
    Route::post('/cinema/create', [RoomController::class, 'store'])->name('cinema.create');
    Route::get('/cinemalist', [RoomController::class, 'cinemalist'])->name('cinema');
    Route::get('/cinema/edit/{id}', [RoomController::class, 'edit'])->name('cinema.edit');
    Route::post('/cinema/update/{id}', [RoomController::class, 'update'])->name('cinema.update');
    Route::get('/cinema/delete/{id}', [RoomController::class, 'destroy'])->name('cinema.delete');

    //Show Time
    Route::get('/showtime/create/{id}', [TimetableController::class, 'showtime'])->name('showtime');
    Route::post('/showtime/create/{id}', [TimetableController::class, 'create'])->name('showtime.create');
    Route::get('/timetablelist', [TimeTableController::class, 'timetablelist'])->name('timetablelist');
    Route::get('/timetable/{id}/edit', [TimeTableController::class, 'edit'])->name('timetable.edit');
    Route::post('/timetable/{id}/update', [TimeTableController::class, 'update'])->name('timetable.update');
    Route::get('/timetable/{id}/delete', [TimeTableController::class, 'delete'])->name('timetable.delete');

    //Seats
    Route::get('/seat/{id}/create', [SeatController::class, 'seat'])->name('seat');
    Route::post('/seat/{id}/create', [SeatController::class, 'create'])->name('seat.create');
    Route::post('/seat/{roomId}/update', [SeatController::class, 'update'])->name('seat.update');
    Route::get('/seat/{id}', [SeatController::class, 'showseat'])->name('seatlist');

    //Mail
    Route::get('/mail', [MailController::class, 'mail'])->name('mail');
});
