<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// Public Routes
Route::post('/register',[UserController::class, 'register']);


// Protectd Routes