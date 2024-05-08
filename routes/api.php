<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;

Route::middleware('auth.api')->get('/user',function(Request $request){
    return $request->user();
});

Route::post('register',[UserController::class,'register']);