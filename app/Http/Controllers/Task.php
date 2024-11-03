<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Models\Task as TaskModel;
use Illuminate\View\View;

class Task extends Controller
{
    // Main task controller.
    public function get(string $id):View
    {
        $id = (int) $id;
        $task = TaskModel::where("id", $id)->get()->first();
        return view('task.show', ['task' => $task]);
    }

    public function get_all():View
    {
        $tasks = TaskModel::all();
        return view('task.show_all', ['tasks' => $tasks]);
    }

    public function store(Request $req): RedirectResponse
    {
        $task = new TaskModel;
        $task->title = $req->title;
        $task->description = $req->description;
        $task->save();
        return redirect()->route('showTasks', ['id' => $task->id]);
    }

    public function update(Request $req, $id): RedirectResponse
    {
        $data = array_filter($req->only(['title', 'description']), function ($val) {
            return !is_null($val);
        });
        TaskModel::where('id', $id)->update($data);
        return redirect()->route('showTasks', ['id' => $id]);
    }

    public function destroy($id): view
    {
        $id = (int) $id;
        TaskModel::where('id', $id)->delete();
        return view('task.show_all', ['tasks' => TaskModel::all()]);
    }

}
