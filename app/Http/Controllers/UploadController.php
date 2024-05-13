<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        // It uploads the file in uploads file in storage/app(here laravel generates a filename as they want)
        // echo $request->file('file')->store('uploads');

        // Here we generate the file name and upload it to public/upload
        // getClientOriginalExtension catches the extension of the uploaded file
        
        $fileName = time() . "-geeky." . $request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('public/uploads',$fileName);

        
    }
}
