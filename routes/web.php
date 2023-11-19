<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('index');

Route::get('dashboard', [BackController::class, 'dash'])->name('dash')->middleware('auth');
Route::group(
    ['prefix' => 'dashboard/profile'],
    function () {
        Route::get('task', [BackController::class, 'task'])->name('task');
        Route::get('plan', [BackController::class, 'plan'])->name('plan');
        Route::get('note', [BackController::class, 'note'])->name('note');
    }
);
Route::group(
    ['prefix' => 'auth'],
    function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login/post', [AuthController::class, 'loginPost'])->name('login.post');
        Route::get('register', [AuthController::class, 'register'])->name('register');
        Route::post('register/post', [AuthController::class, 'registerPost'])->name('register.post');
    }
);
