@extends('layouts.app')

@section('title','Registration Customer')

@section('content')
    <form action="{{url('/')}}/customer" method="POST">
        @csrf
        <x-customer label="Name" name='name' type="text"/>
        <x-customer label="email" name='email' type="email"/>
        <x-customer label="address" name='address' type="text"/>
        <x-customer label="DOB" name='dob' type="date"/>
        <x-customer label="City" name='city' type="text"/>
        <x-customer label="Password" name='password' type="password"/>
        <x-customer label="Status" name='status' type="number"/>
        <button>Submit</button>
    </form>
@endsection 