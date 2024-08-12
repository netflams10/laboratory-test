<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->prefix('/admin')->group(function () {
    Route::patch('laboratory-result', [\App\Http\Controllers\LaboratoryController::class, 'update']);
    Route::post('laboratory-result', [\App\Http\Controllers\LaboratoryController::class, '']);
    Route::get('laboratory-result/{id}', [\App\Http\Controllers\LaboratoryController::class, 'show']);
    Route::get('laboratory-results/{patient_id}', [\App\Http\Controllers\LaboratoryController::class, 'index']);

    Route::get('patient/{id}', [\App\Http\Controllers\PatientController::class, 'show']);
    Route::get('patients', [\App\Http\Controllers\PatientController::class, 'index']);
});     