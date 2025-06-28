<!-- resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Edit Task Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
