<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>

    <ul class="list-group">
        @forelse ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $task->title }}
                <div>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this task?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">No tasks found.</li>
        @endforelse
    </ul>
@endsection
