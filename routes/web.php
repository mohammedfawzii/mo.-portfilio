<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebController::class,'index'])->name('index');
Route::get('dashboard',[BackController::class,'dash'])->name('dash');
Route::get('dashboard/profile/task',[BackController::class,'task'])->name('task');
Route::get('dashboard/profile/plan',[BackController::class,'plan'])->name('plan');
Route::get('dashboard/profile/note',[BackController::class,'note'])->name('note');


