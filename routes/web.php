<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;


Route::get('/',function(){
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function (){
    return view('index',
    [
        'tasks'=>\App\Models\Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('tasks/create','create')->name('tasks.create');

Route::get('/tasks/{id}',function($id){    
    return view('show',['task'=>\App\Models\Task::findOrFail($id)]);
})->name('tasks.show');


Route::get('/hello',function(){

    return "Hello page ma aako ho?";
});


Route::fallback(function(){
    return 'Jpt page ma kina aako?';
});

Route::post('tasks',function(){
    dd("You have store a task successfully");
})->name('tasks.store');