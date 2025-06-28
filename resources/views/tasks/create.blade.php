@extends('layouts.app')

@section('content')
    <h2>Create Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" required>{{ old('description', $task->description ?? '') }}</textarea>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('tasks.index') }}">Back</a>
@endsection
