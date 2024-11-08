<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks list</h1>
        <p>Title: {{ $task->title }}</p>
        <p>Description: {{ $task->description }}</p>
        <p>Priority: {{ $task->priority}}</p>
        <p>Deadline: {{ $task->deadline}}</p>
        <p>Creation date: {{ $task->created_at }}</p>
    </body>
