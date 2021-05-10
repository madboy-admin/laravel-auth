<?php

use Illuminate\Support\Facades\Route;
use MadBoyDevelopers\LaravelAuth\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/me', [AuthController::class, 'me']);
