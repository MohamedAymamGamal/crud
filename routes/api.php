<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;



Route::apiResource('users', UserController::class);
Route::get('/test-api', fn () => response()->json(['message' => 'API working']));
