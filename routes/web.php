<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/tasks/{status}', [TaskController::class, 'show']);
Route::get('/', [TaskController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/task/{id}/delete', [TaskController::class, 'delete']);
Route::get('/tasks/due', [TaskController::class, 'due']);
Route::post("create/task" , [TaskController::class, 'CreateTask']);
Route::get('/task/{id}/onprogress', [TaskController::class, 'onProgress']);
Route::get('/task/{id}/done', [TaskController::class, 'done']);
Route::post("create/user" , [UserController::class, 'CreateUser']);
Route::get("/users/{id}" , [UserController::class, 'UserTasks']);

