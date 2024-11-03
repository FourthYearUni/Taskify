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
        <h1>Tasks show</h1>
        <p>{{ $task->title }}</p>
        <p>{{ $task->description }}</p>
        <p>{{ $task->created_at }}</p>

        <form method="post" action="/tasks/delete/{id}">
            @csrf
            @method('delete')
            <button type="submit"> Delete </button>
        </form>
        <br><br>
    @endforeach
</body>
</html>
