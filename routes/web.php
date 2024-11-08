<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task;

Route::get('/', function () {
    return view('welcome');
});

// Actions

Route::get('/tasks/all', [Task::class, 'get_all'])->name('showAllTasks');
Route::post('/tasks/store', [Task::class, 'store']);
Route::view('/tasks/create', 'task.create');
Route::view('/tasks/edit/{id}', 'task.edit');
Route::get('/tasks/{id}', [Task::class, 'get'])->name('showTasks');
Route::patch('/tasks/update/{id}', [Task::class, 'update']);
Route::delete('/tasks/delete/{id}', [Task::class, 'destroy']);

// Views

