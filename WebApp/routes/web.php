<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApotekController;
use App\Http\Controllers\DashboardController;

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
Route::resource('obat',ObatController::class);
Route::resource('apotek',ApotekController::class);
Route::get('/', [UserController::class, 'view_login']);
Route::get('dashboard', [DashboardController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/{id}', [UserController::class, 'detail']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/update_role/{id}/{role}', [UserController::class, 'update_role']);
});

Route::get('obat/{id}/detail', [ObatController::class, 'detail']);
Route::get('apotek/{id}/detail', [ApotekController::class, 'detail']);