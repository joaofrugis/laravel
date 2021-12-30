<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;

// SANCTUM
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/unauthenticated', function () {
    return ['error' => 'Usuário não logado'];
})->name('login');

Route::post('/user', [AuthController::class, 'create']);

// AUTH COM JWT
Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/auth/logout', [AuthController::class, 'logout']);
Route::middleware('auth:api')->post('/todo', [ApiController::class, 'createTodo']);

// AUTH COM SANCTUM
// Route::post('/auth', [AuthController::class, 'login']);
// Route::middleware('auth:sanctum')->get('/auth/logout', [AuthController::class, 'logout']);
// Route::middleware('auth:sanctum')->post('/todo', [ApiController::class, 'createTodo']);

Route::post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todos', [ApiController::class, 'readAllTodos']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('todo/{id}', [ApiController::class, 'deleteTodo']);