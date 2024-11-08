<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks - Edit</title>
</head>
<body>
<form method="POST" action="/tasks/update/{{$id}}">
    @csrf
    @method('patch')
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title"><br><br>

            <label for="description">Description</label><br>
            <textarea name="description" id="description"></textarea><br>

            <label for="priority" name="priority">Priority</label><br>
            <input type="number" name="priority"><br>

            <label for="decayFactor">Decay factor </label><br>
            <input type="number" name="decayFactor"><br>

            <label for="deadline">Deadline </label><br>
            <input type="datetime-local" name="deadline"><br><br>

            <button type="submit">Create a task</button>

</form>
</body>
</html>
