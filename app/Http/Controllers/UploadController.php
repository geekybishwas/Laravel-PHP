<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $data=request()->validate([
            'caption'=>'required',
            'image'=>['required','image'],
        ]);

        $imagePath=request('image')->store('uploads','public');

        $image=Image::make(public_path('storage/{$imagePath}'))->fit(1200,1200);

        $image->save();


        // It uploads the file in uploads file in storage/app(here laravel generates a filename as they want)
        // echo $request->file('file')->store('uploads');

        // Here we generate the file name and upload it to public/upload
        // getClientOriginalExtension catches the extension of the uploaded file
        
        $fileName = time() . "-geeky." . $request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('public/uploads',$fileName);

        
    }
}
