<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('home');
});

 // 
 Route::get('home', [AuthController::class, 'home'])->name('home');
 Route::post('home', [AuthController::class, 'home'])->name('home');

 // Register
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registation'])->name('register.registation');


// Login
//Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'access'])->name('login.access');


// Dashboard
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Profile
//Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::match(["get","post"],'profile', [AuthController::class, 'profile'])->name('profile');
// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forg_pass', [AuthController::class, 'forg_pass'])->name('forg_pass');
Route::post('forg_pass', [AuthController::class, 'forg_pass'])->name('forg_pass');


Route::get('home_user', [AuthController::class, 'home_user'])->name('home_user');
Route::post('home_user', [AuthController::class, 'home_user'])->name('home_user');