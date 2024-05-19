@extends('layouts.app')

@section('title',$task->title)

@section('content')
    <p>{{$task->description}}</p>

    @if($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif
    <p>{{$task->created_at}}</p>
    <p>{{$task->updated_at}}</p>
    
    @if($task->completed)
        Completed
    @else
        Not Completed
    @endif
    <div>
        <form action="{{route('tasks.toggle-complete',['task'=>$task->id])}}" method="POST">
            @csrf
            @method('PUT')
            <button type='submit'>
                Mark as {{$task->completed ? "completed":"not completed"}}
            </button>
        </form>
    </div>

    <form action="{{route('tasks.delete',['task'=>$task->id])}}" method="POST">

        @csrf
        @method('DELETE')
        <button type='submit'>Delete</button>

    </form>

@endsection