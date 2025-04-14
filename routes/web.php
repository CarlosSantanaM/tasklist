<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/home', [TasksController::class, 'home'])->name('home');

Route::get('/task', [TasksController::class, 'index'])->name('tasks.index');
Route::post('/createtask', [TasksController::class, 'store'])->name('tasks.store');

Route::get('/painel', [TasksController::class, 'painel'])->name('tasks.view');
