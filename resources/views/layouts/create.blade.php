<!-- resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-success">Create</button>
    </form>
@endsection
