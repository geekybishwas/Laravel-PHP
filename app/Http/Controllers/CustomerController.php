<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    
    public function create(){
        $url=url('/customer');
        $title='Customer Registration';
        $data=compact('url','title');
        return view('customerDetails')->with($data);
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
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

        return redirect('/customer/view');
    }

    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {
            $customers=Customers::where('name','LIKE',"$search%")->orWhere('email','LIKE',"$search%")->get();
            // echo $search;
            // die;
        }
        else{
            $customers=Customers::paginate(15);
        }
        $data=compact('customers','search');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        // It finds the customer by their id and delete the record
        // Customers::find($id)->delete();
        $customers=Customers::find($id);
        if(!is_null($customers))
        {
            $customers->delete();
        }
        return redirect('customer/view');
        // It return the redirect back to where it came from
        // return redirect()->back();

    }

    public function forceDelete($id)
    {
        $customers=Customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->forceDelete();
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        $customers=Customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->restore();
        }
        return redirect('customer/trash');
    }

    public function edit($id)
    {
        $customers=Customers::find($id);
        if(is_null($customers))
        {
            // if user not found
            return redirect('customer/view');
        }
        else{
            $url=url('/customer/update') .'/' . $id;
            $title='Update Customers';
            $data=compact('customers','url','title');
            return view('customerDetails')->with($data);
        }
        
    }
    public function update($id,Request $request)
    {
        $customers=Customers::find($id);
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->address=$request['address'];
        $customers->dob=$request['dob'];
        $customers->city=$request['city'];
        $customers->password=md5($request['password']);
        $customers->status=$request['status'];
        $customers->save();

        return redirect('/customer/view');
    }
    public function trash()
    {
        $customers=Customers::onlyTrashed()->get();
        // $customers=Customers::withTrashed()->get();

        $data=compact('customers');
        return view('customerTrash')->with($data);

    }
}
