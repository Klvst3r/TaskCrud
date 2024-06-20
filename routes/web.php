<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(TaskController::class)->group( function(){
    Route::get("/","index")->name('tasks.index');

    Route::get('tasks/create','create')->name('tasks.create');

    Route::post("tasks","store")->name("tasks.store");

    Route::delete('tasks/{task}', "destroy")->name("tasks.destroy");

    Route::get('tasks/{task}/edit','edit')->name('tasks.edit');

    Route::put('tasks/{task}/edit','update')->name('tasks.update');

});

