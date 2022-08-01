<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request['title'];
        $task->save();
        return redirect()->route('task.index');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return back();
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }
    
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request['title'];
        $task->save();
        return redirect()->route('task.index');
    }
}
