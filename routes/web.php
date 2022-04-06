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

Route::get('/', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/home', [App\Http\Controllers\EventController::class, 'index'])->name('home');

//CRUD Event
Route::get('/edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('edit');
Route::delete('/delete/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('delete');
Route::patch('/update/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
