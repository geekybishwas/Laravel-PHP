@extends('layouts.app')

@section('title','The list of tasks')


@section('content')

    @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show',['task'=>$task->id])}}">
                {{$task->title}}</div>
            </a>
    @empty
        <div>There is no tasks here</div>
    @endforelse
        
    @if($tasks->count())
        {{$tasks->links();}}
    @endif
@endsection