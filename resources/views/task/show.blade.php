<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks show</h1>
        <p>{{ $task->title }}</p>
        <p>{{ $task->description }}</p>
        <p>{{ $task->created_at }}</p>
    </body>