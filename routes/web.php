<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RequestLoansController;

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

Route::get('/', function () {
    return view('landing_page');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [MainController::class, 'dashboard']);

Route::get('/inventory', [InventoryController::class, 'inventory']);

Route::get('/lab_1', [InventoryController::class, 'lab_1']);

Route::get('/lab_2', [InventoryController::class, 'lab_2']);

Route::get('/requestLoans', [RequestLoansController::class, 'requestLoans']);

Route::get('/request', [RequestLoansController::class, 'request']);

