<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::name('home')->get('/', function () {
    return view('home');
});

Route::middleware('guest')->prefix('/auth')->name('auth.')->group(function () {
    Route::get('/register', [AuthController::class, 'ViewRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'Register'])->name('SubmitRegister');
    Route::get('/login', [AuthController::class, 'ViewLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'Login'])->name('SubmitLogin');
    Route::get('/forget-password', [AuthController::class, 'ViewForgetPass'])->name('ForgetPass');
    Route::post('/forget-password', [AuthController::class, 'ForgetPass'])->name('SubmitForgetPass');
    Route::get('/reset-password/{id}',[AuthController::class,'ViewResetPass'])->name('ResetPass');
    Route::post('/reset-password', [AuthController::class, 'ResetPass'])->name('SubmitResetPass');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
