<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    
    public function index(){
        return view('customerDetails');
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        // echo $request['city'];
        // Insert query through models;
        $customers=new Customers;
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->address=$request['address'];
        $customers->dob=$request['dob'];
        $customers->city=$request['city'];
        $customers->password=md5($request['password']);
        $customers->status=$request['status'];
        $customers->save();
    }
}
