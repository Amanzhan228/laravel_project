<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Tasks</h1>

        @if ($tasks->isEmpty())
            <p>No tasks yet.</p>
        @else
            <ul>
                @foreach ($tasks as $task)
                    <li>{{ $task->title }}</li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('tasks.create') }}">Create new task</a>
    </div>
@endsection
