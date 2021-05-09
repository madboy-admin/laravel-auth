<?php

use Illuminate\Support\Facades\Route;
use MadBoyDevelopers\LaravelAuth\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
