<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Services\Task\TaskServiceInterface;

class TaskController extends Controller
{
    private $taskInterface;

    public function __construct(TaskServiceInterface $taskInterface)
    {
        $this->taskInterface = $taskInterface;
    } 
    
    public function showTaskList()
    {
        $tasks=  $this->taskInterface->getTaskList();
        return view('task.index', compact('tasks'));
    }

    public function storeTaskList(Request $request)
    {
        $task=$this->taskInterface->saveTask($request);
        return redirect()->route('task.index');
    }

    public function showEditTaskListView($id)
    {
        $task=$this->taskInterface->getTaskById($id);
        return view('task.edit' , compact('task'));
    }

    public function updateTaskList(Request $request, $id)
    {
        $task = $this->taskInterface->updateTaskById($request,$id);
        return redirect()->route('task.index');
    }
     
    public function deleteTask($id)
    {
        $task = $this->taskInterface->deleteTaskById($id);
        return back();
    }
}
