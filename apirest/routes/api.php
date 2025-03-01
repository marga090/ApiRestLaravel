<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;
use App\Http\Controllers\Api\ParticipanteController;

Route::get('/students', [studentController::class, 'index']);
Route::post('/students', [studentController::class, 'store']);
Route::get('/students/{id}', [studentController::class, 'show']);
Route::put('/students/{id}', [studentController::class, 'update']);
Route::patch('/students/{id}', [studentController::class, 'updatePartial']);
Route::delete('/students/{id}', [studentController::class, 'destroy']);

Route::get('/participantes', [ParticipanteController::class, 'index']);
Route::post('/participantes', [ParticipanteController::class, 'store']);
Route::get('/participantes/{id}', [ParticipanteController::class, 'show']);
Route::put('/participantes/{id}', [ParticipanteController::class, 'update']);
Route::patch('/participantes/{id}', [ParticipanteController::class, 'updatePartial']);
Route::delete('/participantes/{id}', [ParticipanteController::class, 'destroy']);

//Route::get('/students/{id}', function () {
//    return 'Obteniendo un estudiante';
//});

//Route::post('/students', function () {
//    return 'Creando estudiantes';
//});

//Route::put('/students/{id}', function () {
//    return 'Actualizando estudiante';
//});


//Route::delete('/students/{id}', function () {
//    return 'Eliminando estudiante';
//});

