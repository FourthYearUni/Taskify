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
    <label for="title">Title</label>
    <input type="text" name="title" id="title"><br>
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>
    <button type="submit">Update task</button>
</form>
</body>
</html>
