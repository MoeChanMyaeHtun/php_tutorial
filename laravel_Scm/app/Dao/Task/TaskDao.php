<?php
namespace App\Dao\Task;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Contracts\Dao\Task\TaskDaoInterface;

class TaskDao implements TaskDaoInterface
{
    public function getTaskList()
    {
        $tasks = Task::all();
        return $tasks;
    }

    public function saveTask(Request $request)
    {
        $task = new Task();
        $task->title=$request['title'];
        $task->save();
        return $task;
    }

    public function getTaskById($id)
    {
        $task = Task::find($id);
        return $task;
    }

    public function updateTaskById(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title=$request['title'];
        $task->save();
        return $task;
    }

    public function deleteTaskById($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}