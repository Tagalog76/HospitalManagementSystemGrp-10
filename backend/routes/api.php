<?php


use App\Http\Controllers\DoctorsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PatientsController;
use app\Http\Controllers\RecordsController;

Route::middleware('auth:api')->group(function () {
    
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('appointments', AppointmentsController::class);
Route::apiResource('users', UsersController::class);
Route::apiResource('doctors', DoctorsController::class);

Route::apiResource('records', RecordsController::class);
Route::post('/appointments', [AppointmentsController::class, 'store']);
Route::post('/users', [UsersController::class, 'store']);
Route::post('/patients', [PatientsController::class, 'store']);
Route::post('/doctors', [DoctorsController::class, 'store']);
Route::post('/records', [RecordsController::class, 'store']);
Route::put('/appointments/{id}', [AppointmentsController::class, 'update']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::put('/patients/{id}', [PatientsController::class, 'update']);
Route::put('/doctors/{id}', [DoctorsController::class, 'update']);
Route::put('/records/{id}', [RecordsController::class, 'update']);
Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);
Route::delete('/patients/{id}', [PatientsController::class, 'destroy']);
Route::delete('/doctors/{id}', [DoctorsController::class, 'destroy']);
Route::delete('/records/{id}', [RecordsController::class, 'destroy']);

