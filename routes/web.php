<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerController;

// To get the details of customer table by using models and show them into array

// Route::get('/customer',function(){
//     $customers=Customers::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::get('/',function(){
    return view('indexx');
});

// Basic Controller
// Route::get('/',[UserController::class,'register']);

// Single Action Controller
Route::get('/single',SingleActionController::class);

//Resource Controller
Route::resource('photo',ResourceController::class);

Route::get('/register',[RegistrationController::class ,'index']);

Route::post('/register',[RegistrationController::class ,'register']);

































Route::get('/tasks', function (){
    return view('index',
    [
        'tasks'=>Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('tasks/create','create')->name('tasks.create');


Route::get('/tasks/{task}/edit',function(Task $task){    
    return view('edit',['task'=>$task]);
})->name('tasks.edit');


Route::get('/tasks/{task}',function(Task $task){    
    return view('show',['task'=>$task]);
})->name('tasks.show');



// Route::get('/hello',function(){

//     return "Hello page ma aako ho?";
// });


// Route::fallback(function(){
//     return 'Jpt page ma kina aako?';
// });

// Route::post('/tasks',function(Request $request){
//     $data=$request->validate([
//         'title'=>'required|max:255', 
//         'description'=>'required',
//         'long_description'=>'required'
//     ]);

//     $task=new Task;
//     $task->title=$data['title'];
//     $task->description=$data['description'];
//     $task->long_description=$data['long_description'];
//     $task->save();

//     // One time message using flash by creating session  variable success(with->)
//     return redirect()->route('tasks.show',['id'=>$task->id])
//     ->with('success','Task created successfully');
// })->name('tasks.store');

// Route::put('/tasks/{task}',function(Task $task,Request $request){
//     $data=$request->validate([
//         'title'=>'required|max:255',
//         'description'=>'required',
//         'long_description'=>'required'
//     ]);
 
//     $task->title=$data['title'];
//     $task->description=$data['description'];
//     $task->long_description=$data['long_description'];
//     $task->save();

//     // One time message using flash by creating session  variable success(with->)
//     return redirect()->route('tasks.show',['id'=>$task->id])
//     ->with('success','Task updated successfully');
// })->name('tasks.update');