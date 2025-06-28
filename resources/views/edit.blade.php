<!-- resources/views/tasks/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
<h1>Edit Task</h1>

@if ($errors->any())
    <div style="color:red">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $task->title }}">
    <button type="submit">Update</button>
</form>

<a href="{{ route('tasks.index') }}">Back to list</a>
</body>
</html>
