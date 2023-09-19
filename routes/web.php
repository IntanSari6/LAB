<?php

use App\Models\Reqloans;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReqloansController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ManageLoansController;
use App\Http\Controllers\RequestLoansController;
use App\Http\Controllers\ManageInventoryController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [MainController::class, 'dashboard']);

Route::get('/inventory', [InventoryController::class, 'inventory']);

Route::get('/lab_1', [InventoryController::class, 'lab_1']);

Route::get('/lab_2', [InventoryController::class, 'lab_2']);

// Route::get('/requestLoans', [RequestLoansController::class, 'requestLoans']);

// Route::get('/request', [RequestLoansController::class, 'request']);

Route::get('/schedule', [ScheduleController::class, 'schedule']);

Route::get('/manage_lab_inventory', [ManageInventoryController::class, 'manage_lab_inventory']);

Route::get('/manage_schedule', [MainController::class, 'manage_schedule']);

Route::get('/lab1', [ManageInventoryController::class, 'lab1']);

Route::get('/lab2', [ManageInventoryController::class, 'lab2']);

Route::get('/create1', [ManageInventoryController::class, 'create1']);

Route::get('/detail', [ManageInventoryController::class, 'detail']);

Route::get('/create', [ManageInventoryController::class, 'create']);
Route::post('/create', [ManageInventoryController::class, 'input']);
Route::get('/tampil', [ManageInventoryController::class, 'tampil']);

Route::get('/manage_loans', [ManageLoansController::class, 'manage_loans']);

Route::get('/requestLoans', [ReqloansController::class, 'index']);
Route::get('/requestLoans/create', [ReqloansController::class, 'create']);
Route::post('/manage_loans/store', [ReqloansController::class, 'store']);
