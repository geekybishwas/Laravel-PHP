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
use App\Http\Controllers\UploadController;


// To get the details of customer table by using models and show them into array

// Route::get('/customer',function(){
//     $customers=Customers::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });


// Route Grouping
Route::group(['prefix'=>'/customer'],function(){
    Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/',[CustomerController::class,'store']);
    Route::get('/view',[CustomerController::class,'view']);
    Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/forceDelete/{id}',[CustomerController::class,'forceDelete'])->name('customer.forceDelete');
    Route::get('/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/trash',[CustomerController::class,'trash'])->name('customer.trash');

});


Route::get('/',function(){
    return view('indexx');
});

Route::get('/upload',function(){
    return view('upload');
});

// Route::put('/uplaod',[ContactController::class,'store'])->name('file.uplaod');
Route::post('upload', [UploadController::class,'store'])->name('file.upload');

// Basic Controller
// Route::get('/',[UserController::class,'register']);

// Single Action Controller
Route::get('/single',SingleActionController::class);

//Resource Controller
Route::resource('photo',ResourceController::class);

Route::get('/register',[RegistrationController::class ,'index']);

Route::post('/register',[RegistrationController::class ,'register']);

// It prints all the session data stored
Route::get('get-all-session',function(){
    $session=session()->all();
    p($session);
});

// It set the session data 
Route::get('set-session',function(Request $request){
    $request->session()->put('name',"biswas");
    $request->session()->put('id','123');
    // It wil appear one at a time and destroy itself
    $request->session()->flash('status','Suceess');
    return redirect('get-all-session');

});

// It destroy the session data
Route::get('destroy-session',function(){
    session()->forget(['name','id']);
    return redirect('get-all-session');
});































// Route::get('/tasks', function (){
//     return view('index',
//     [
//         'tasks'=>Task::latest()->get()
//     ]);
// })->name('tasks.index');

// Route::view('tasks/create','create')->name('tasks.create');


// Route::get('/tasks/{task}/edit',function(Task $task){    
//     return view('edit',['task'=>$task]);
// })->name('tasks.edit');


// Route::get('/tasks/{task}',function(Task $task){    
//     return view('show',['task'=>$task]);
// })->name('tasks.show');



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