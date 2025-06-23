<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class)->names('api.users');
});
