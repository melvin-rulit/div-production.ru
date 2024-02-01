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

Route::group(['prefix' => 'v1'], function () {

    Route::get('/getApplications', IndexController::class);
    Route::get('/getApplication/{application}', ShowController::class);
    Route::post('/createApplications', CreateController::class);
    Route::put('/updateApplications/{application}', UpdateController::class);
    Route::delete('/deleteApplications/{application}', DeleteController::class);

    Route::post('/sendEmail', IndexController::class);

});


