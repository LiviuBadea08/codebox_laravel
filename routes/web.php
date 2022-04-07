<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;

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

Auth::routes();

Route::get('/', [EventController::class, 'index']);
Route::get('/home', [EventController::class, 'index'])->name('home');

//CRUD Event

Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [EventController::class, 'update'])->name('update');

Route::post('/events', [EventController::class, 'store'])->name('store');
Route::get('/create', [EventController::class, 'create'])->name('create');

