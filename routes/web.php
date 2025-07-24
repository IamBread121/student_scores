<?php

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::post('/students/update', [StudentController::class, 'update']);
Route::post('/students/delete', [StudentController::class, 'delete']);