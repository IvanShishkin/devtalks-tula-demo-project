<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('tasks')->group(function () {
    Route::get('/get', [\App\Http\Controllers\TaskController::class, 'get']);
    Route::get('/all', [\App\Http\Controllers\TaskController::class, 'all']);
    Route::post('/create', [\App\Http\Controllers\TaskController::class, 'create']);
    Route::post('/update', [\App\Http\Controllers\TaskController::class, 'update']);
});


Route::any('test', function () {

    $dto = new \App\DTO\CreateTaskDTO(title: 'Title', description: '123123123');

    dd($dto);
});
