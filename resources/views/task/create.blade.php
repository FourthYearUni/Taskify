<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        <h1>Task creation</h1>
        <form method="POST" action="/tasks/store">
            @csrf
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
    </body>
</html>
