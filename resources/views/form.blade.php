@extends('layouts.app')

@section('title','Registration Form')

@section('content')
    {{-- url('/''),it gets the base url so the action of this form goes to baseurl/register with method of post --}}
    <form action="{{url('/')}}/register" method="POST"> 
        @csrf
        <label for="name">Name</label>
        <input type="text" name='name' id='name'>

        <label for="email">Email</label>
        <input type="text" name='email' id='email'>

        <label for="password">Password</label>
        <input type="password" name='password' id='password'>
        @error('password')
            {{$message}}
        @enderror

        <label for="cpassword">Password</label>
        <input type="password" name='password_confirmation' id='password_confirmation'>
        @error('password_confirmation')
            {{$message}}
        @enderror

        <button>Submit</button>
    </form>
@endsection