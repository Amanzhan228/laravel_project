<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/tasks');
});


use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
