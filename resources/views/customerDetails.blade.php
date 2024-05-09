@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('content')
    <form action="{{$url}}" method="POST">
        @csrf
        <x-customer label="Name" name='name' type="text" value="{{$customers->name}}"/>
        <x-customer label="email" name='email' type="email" value="{{$customers->email}}"/>
        <x-customer label="address" name='address' type="text" value="{{$customers->address}}"/>
        <x-customer label="DOB" name='dob' type="date" value="{{$customers->dob}}"/>
        <x-customer label="City" name='city' type="text" value="{{$customers->city}}"/>
        <x-customer label="Password" name='password' type="password" value="{{$customers->password}}"/>
        <x-customer label="Status" name='status' type="number" value="{{$customers->status}}"/>
        <button>Submit</button>
    </form>
@endsection 