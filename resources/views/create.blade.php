<!-- resources/views/tasks/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
<h1>Create Task</h1>

@if ($errors->any())
    <div style="color:red">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title">
    <button type="submit">Save</button>
</form>

<a href="{{ route('tasks.index') }}">Back to list</a>
</body>
</html>
