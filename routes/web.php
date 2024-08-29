<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);
Route::patch('users/{user}/deactivate', [UserController::class, 'deactivate'])->name('users.deactivate');
Route::get('/', function () {
    return view('welcome');
});
