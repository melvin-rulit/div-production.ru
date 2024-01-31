<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Application\IndexController;
use App\Http\Controllers\Api\V1\Application\CreateController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/getApplications', IndexController::class);
Route::post('/v1/createApplications', CreateController::class);
