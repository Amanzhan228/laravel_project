<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
<h1>Tasks</h1>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<a href="{{ route('tasks.create') }}">Create New Task</a>

<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }}
            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this task?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>
