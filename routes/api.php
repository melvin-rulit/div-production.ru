<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Application\ShowController;
use App\Http\Controllers\Api\V1\Application\IndexController;
use App\Http\Controllers\Api\V1\Application\CreateController;
use App\Http\Controllers\Api\V1\Application\UpdateController;
use App\Http\Controllers\Api\V1\Application\DeleteController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/getApplications', IndexController::class);
Route::get('/v1/getApplication/{application}', ShowController::class);
Route::post('/v1/createApplications', CreateController::class);
Route::put('/v1/updateApplications/{application}', UpdateController::class);
Route::delete('/v1/deleteApplications/{application}', DeleteController::class);
