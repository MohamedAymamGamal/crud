<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
