<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes(['verify' => true]);

Route::get('/', [EventController::class, 'index'])->name('index');
Route::get('/home', [EventController::class, 'index'])->name('home');
Route::get('/show/{id}', [EventController::class, 'show'])->name('show');

//CRUD Event

Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete')->middleware('auth', 'isAdmin');
Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit')->middleware('auth', 'isAdmin');
Route::patch('/update/{id}', [EventController::class, 'update'])->name('update')->middleware('auth', 'isAdmin');
Route::post('/events', [EventController::class, 'store'])->name('store')->middleware('auth', 'isAdmin');
Route::get('/create', [EventController::class, 'create'])->name('create')->middleware('auth', 'isAdmin');

// USER PROFILE

Route::get('/profile', [UserController::class, 'show'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::patch('/profile/update/{user}', [UserController::class, 'update'])->name('profile.update')->middleware('auth');
Route::get('/info', [HomeController::class, 'info'])->name('info');

// relacion event user
Route::get('/subscribe/{id}', [EventController::class, 'subscribe'])->name('subscribe')->middleware('auth');
Route::get('/cancelSuscription/{id}', [EventController::class, 'cancelSuscription'])->name('cancelSuscription')->middleware('auth');

