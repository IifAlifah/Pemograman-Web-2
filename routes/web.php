<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userLaptopController;

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
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna')->middleware('admin');
    Route::resource('dashboard', DashboardController::class) ->name('*', 'dashboard');

});


Route::resource('laptop', LaptopController::class) ->name('index', 'laptop');
Route::get('/userLaptop', [DashboardController::class, 'showUserLaptop'])->name('dashboard.showUserLaptop');




