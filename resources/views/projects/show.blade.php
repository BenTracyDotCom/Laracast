@extends('layout')

@section('content')

<h1>{{ $project->title }}</h1>

@can('update', $project)
    <a href="">Update</a>
@endcan

<p>{{$project->description }}</p>
@if($project->tasks->count())
    <div>
        @foreach($project->tasks as $task)
            <div>
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                @if($task->completed)    
                @method('DELETE')
                    @endif
                    @csrf
                        <label class="checkbox {{ $task->completed ? "is-complete" : "" }}" for="completed">
                            <div>
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                {{ $task->description }}
                            </div>
                        </label>
                </form>
            </div>
        @endforeach
    </div>
@endif

<form method="POST" action="/projects/{{ $project->id }}/tasks">
    @csrf
    <div>
        <input type="text" class="input" name="description" placeholder="description">
    </div>
    <button class="submit" type="submit">Add Task</button>
</form>
@include('errors')

<p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>
@endsection