<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskManagerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', [TaskManagerController::class, 'index']);

Route::get('tasks/{task}', [TaskManagerController::class, 'show']);

Route::get('create', [TaskManagerController::class, 'create']);

Route::get('tasks/{task}/edit', [TaskManagerController::class, 'edit']);

Route::get('tasks/{task}/complete', [TaskManagerController::class, 'complete']);

Route::post('tasks/{task}/update-task', [TaskManagerController::class, 'update']);

Route::get('tasks/{task}/delete', [TaskManagerController::class, 'destroy']);

Route::post('create-task', [TaskManagerController::class, 'store']);


