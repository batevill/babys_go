<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChildController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\DiaryEntryController;
use App\Http\Controllers\GrowthRecordController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\ReminderController;

Route::get('/', function () {
    return view('welcome');
});

// Assuming web routes will need some auth middleware later, wrapping them in a group is best practice.
// For now, these just map to the standard resource methods (index, create, store, show, edit, update, destroy)
Route::resource('children', ChildController::class);
Route::resource('children.diaries', DiaryController::class)->parameters([
    'children' => 'child',
    'diaries' => 'diary',
]);
Route::resource('children.growth_records', GrowthRecordController::class)->parameters([
    'children' => 'child',
    'growth_records' => 'record',
]);
Route::resource('children.medical_records', MedicalRecordController::class)->parameters([
    'children' => 'child',
    'medical_records' => 'medical',
]);
Route::resource('children.reminders', ReminderController::class)->parameters([
    'children' => 'child',
    'reminders' => 'reminder',
]);
Route::resource('diaries.entries', DiaryEntryController::class)->parameters([
    'diaries' => 'diary',
    'entries' => 'entry',
]);
Route::resource('reminders', ReminderController::class);
