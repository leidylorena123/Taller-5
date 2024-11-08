<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Ruta para obtener la lista de estudiantes
Route::get('/students', [StudentController::class, 'index']);

// Ruta para obtener un estudiante por ID
Route::get('/students/{id}', [StudentController::class, 'show']);

// Ruta para crear un nuevo estudiante
Route::post('/students', [StudentController::class, 'store']);

// Ruta para actualizar un estudiante por ID
Route::put('/students/{id}', [StudentController::class, 'update']);

// Ruta para actualizar campo especifico de estudiante x id
Route::patch('/students/{id}', [StudentController::class, 'updatePartial']);

// Ruta para eliminar un estudiante por ID
Route::delete('/students/{id}', [StudentController::class, 'destroy']);