@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" required>{{ old('description', $task->description ?? '') }}</textarea>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('tasks.index') }}">Back</a>
@endsection
