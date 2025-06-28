<!-- resources/views/tasks/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
<h1>Task: {{ $task->title }}</h1>

<a href="{{ route('tasks.index') }}">Back to list</a>
</body>
</html>
