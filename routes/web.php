<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/home', [TasksController::class, 'home'])->name('home');

Route::get('/task', [TasksController::class, 'index'])->name('tasks.index');
Route::post('/createtask', [TasksController::class, 'store'])->name('tasks.store');

// Proximo passo, Exibir Msg de error e sucess