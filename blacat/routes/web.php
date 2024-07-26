<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['auth.login'])->group(function () {

    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware(['not.auth.login'])->group(function () {

    Route::get('/login', function () {
        return view('auth.signin');
    })->name('logar');

    Route::match(['get', 'post'], '/login-store', [AuthController::class, 'login'])->name('login');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

    Route::match(['get', 'post'], 'register-user', [AuthController::class, 'register'])->name('registerUser');

    Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');

    Route::get('/sendcode', [AuthController::class, 'sendCode'])->name('sendcode');

    Route::get('/forgot', function () {
        return view('auth.forgot-password');
    });


});
