<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');

// Register
Route::get('/register',  [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
