<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    @foreach ($tasks as $task)
        <h1>Task</h1>
        <p>Title: {{ $task->title }}</p>
        <p>Description: {{ $task->description }}</p>
        <p>Priority: {{ $task->priority}}</p>
        <p>Deadline: {{ $task->deadline}}</p>
        <p>Creation date: {{ $task->created_at }}</p>

        <form method="post" action="/tasks/delete/{id}">
            @csrf
            @method('delete')
            <button type="submit"> Delete </button>
        </form>
        <br>
        <a href="/tasks/edit/{{$task->id}}">Edit</a>
        <br><br>

    @endforeach
</body>
</html>
