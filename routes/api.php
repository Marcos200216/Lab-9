<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

Route::get('/suma/{num1}/{num2}', [MathController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [MathController::class, 'mult']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});