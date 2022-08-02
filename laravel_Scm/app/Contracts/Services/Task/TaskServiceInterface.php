<?php
namespace App\Contracts\Services\Task;

use Illuminate\Http\Request;


interface TaskServiceInterface 
{
    public function getTaskList();

    public function saveTask(Request $request);

    public function getTaskById($id);

    public function updateTaskById(Request $request, $id);

    public function deleteTaskById($id);
}