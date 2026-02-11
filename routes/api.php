<?php

use App\Http\Controllers\Api\ArgotController;
use Illuminate\Support\Facades\Route;

Route::get('/argots', [ArgotController::class, 'index']);
Route::get('/argots/{argot}', [ArgotController::class, 'show']);
Route::post('/argots', [ArgotController::class, 'store']);
Route::patch('/argots/{argot}', [ArgotController::class, 'update']);
Route::delete('/argots/{argot}', [ArgotController::class, 'destroy']);
