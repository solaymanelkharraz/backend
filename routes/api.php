<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// This tells the file exactly where your controllers live
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\ScoreController;

// Your API Routes
Route::get('/questions', [QuestionController::class, 'index']);
Route::post('/scores', [ScoreController::class, 'store']);