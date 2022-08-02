<?php
namespace App\Contracts\Dao\Task;

use Illuminate\Http\Request;


interface TaskDaoInterface 
{
    public function getTaskList();
    
    public function saveTask(Request $request);

    public function getTaskById($id);

    public function updateTaskById(Request $request, $id);

    public function deleteTaskById($id);
}
