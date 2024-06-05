<?php

use App\Http\Controllers\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorsController;

Route::middleware('auth:api')->group(function () {

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('appointments', AppointmentsController::class);
Route::apiResource('users', UsersController::class);
