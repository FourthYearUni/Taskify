<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks create</h1>
        <form method="POST" action="/tasks/store">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title"><br>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
            <button type="submit">Create a task</button>
    </body>
</html>
