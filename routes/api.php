<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Api\V1\ChildController;
use App\Http\Api\V1\DiaryController;
use App\Http\Api\V1\DiaryEntryController;
use App\Http\Api\V1\GrowthRecordController;
use App\Http\Api\V1\MedicalRecordController;
use App\Http\Api\V1\ReminderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

    Route::post('/register', [\App\Http\Api\V1\AuthController::class, 'register']);
    Route::post('/login', [\App\Http\Api\V1\AuthController::class, 'login']);

    // Protected Routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [\App\Http\Api\V1\AuthController::class, 'logout']);
        
        Route::apiResource('children', ChildController::class);

        Route::apiResource('children.diaries', DiaryController::class)->parameters([
            'children' => 'child',
            'diaries' => 'diary',
        ]);
        Route::apiResource('children.growth_records', GrowthRecordController::class)->parameters([
            'children' => 'child',
            'growth_records' => 'record',
        ]);
        Route::apiResource('children.medical_records', MedicalRecordController::class)->parameters([
            'children' => 'child',
            'medical_records' => 'medical',
        ]);
        Route::apiResource('children.reminders', ReminderController::class)->parameters([
            'children' => 'child',
            'reminders' => 'reminder',
        ]);

        Route::apiResource('diaries.entries', DiaryEntryController::class)->parameters([
            'diaries' => 'diary',
            'entries' => 'entry',
        ]);

        Route::apiResource('reminders', ReminderController::class);
});
