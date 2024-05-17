<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function register(Request $req){
        
        print_r($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required' //or 'cpassword'=>'required|same:password' 

        ]);
        echo "<pre>";
        echo "aaya yl";
        return view('form');
    }
}
