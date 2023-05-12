<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AvailableRoom;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\currentClientsController;
use App\Http\Controllers\RoomController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::resource('/rooms', RoomController::class);
Route::resource('/available', AvailableRoom::class);
Route::resource('/clients', ClientController::class);
Route::resource('/currentClients', currentClientsController::class);
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