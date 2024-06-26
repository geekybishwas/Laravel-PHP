@extends('layouts.app')

@section('title','Add Task')

@section('styles')

    <style>
        .error_message{
            color:red;
            font-size:0.8rem;
        }
    </style>

@endsection

@section('content')
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf
        {{-- {{$errors}} --}}
        <div>
            <label for="text">Title</label>
            <input type="text" name="title" id='title' value={{old('title')}}>
            @error('title')
                <p class='error_message'>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error('description')
                <p class='error_message'>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10">{{old('long_description')}}</textarea>
            @error('long_description')
                <p class='error_message'>{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Submit" name='submit'>
        </div>
    </form>

@endsection