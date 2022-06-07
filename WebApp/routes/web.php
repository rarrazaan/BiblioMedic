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
Route::get('/', function(){
    return view('login');
});
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/login', [UserController::class, 'login']);
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'detail']);
Route::get('obat/{id}/edit', 'ObatController@edit');
Route::put('obat/{id}/edit', 'ObatController@update');
