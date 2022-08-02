<?php 
namespace App\Services\Task;
use Illuminate\Http\Request;
use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Contracts\Services\Task\TaskServiceInterface;


class TaskService implements TaskServiceInterface 
{
    private $taskDao;
    
    public function __construct(TaskDaoInterface $taskDao)
    {
        $this->taskDao = $taskDao;
    }

    public function getTaskList()
    {
        return $this->taskDao->getTaskList();
    }

    public function saveTask(Request $request)
    {
        return $this->taskDao->saveTask($request);
    }

    public function getTaskById($id)
    {
        return $this->taskDao->getTaskById($id);
    }

    public function updateTaskById(Request $request,$id)
    {
        return $this->taskDao->updateTaskById($request, $id);
    }

     public function deleteTaskById($id)
     {
        return $this->taskDao->deleteTaskById($id);
     }
}