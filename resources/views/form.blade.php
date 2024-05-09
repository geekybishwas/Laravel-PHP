@extends('layouts.app')

@section('title','Registration Form')

@section('content')
    {{-- url('/''),it gets the base url so the action of this form goes to baseurl/register with method of post --}}
    <form action="{{url('/register')}}" method="POST"> 
        @csrf
        @php    
            $demo=1;
        @endphp
        <x-input label='Name' name="name" type='text':demo='$demo'/>
        <x-input label='Email' name="email" type='email'/>
        <x-input label='Password' name="password" type='password'/>
        <x-input label='Confirm Password' name="confirmation_password" type='password'/>
        <button>Submit</button>
    </form>
@endsection