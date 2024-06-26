@extends('layout')

@section('title', 'Edit Project')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf
    <input type="text" class="input" name="title" placeholder="{{ $project->title }}" value="{{ old('title') }}">
    <textarea type="text" class="input" name="description" placeholder="{{ $project->description }}"
        value="{{ old('description') }}"></textarea>
    <button type="submit" class="button is-link">Update Project</button>
</form>
<form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf
    <button type="submit">Delete Project</button>
</form>

@include('errors')

@endsection