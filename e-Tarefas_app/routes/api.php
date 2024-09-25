<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', [LoginController::class, 'index']);

Route::apiResource('tasks', TaskController::class);