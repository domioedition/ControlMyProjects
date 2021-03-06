<?php

namespace App\Controllers;


class ControllerTask extends Controller
{

    protected $tasks;
    protected $params;

    public function __construct($params)
    {
        parent::__construct();
        $this->params = $params;
    }

    protected function actionIndex()
    {
        $this->view->tasks = \App\Models\ModelTask::findAll();
        $this->view->display(__DIR__ . '/../templates/tasks.php');
    }

    protected function actionOne()
    {
        $taskId = $this->params;

        try{
            $this->view->task = \App\Models\ModelTask::findById($taskId);
            $this->view->comments = \App\Controllers\ControllerComment::showAllComments(1,$taskId);
            if($this->view->task === null){
                throw new \Exception("Task not found");
            }
            $this->view->display(__DIR__.'/../templates/task.php');

        }catch (\Exception $e){
            header('HTTP/1.1 400 Bad request');
            header('Location: /App/templates/error.php');
            echo $e->getMessage();
        }

    }

    protected function actionAdd()
    {
		if(empty($_POST)){
			$this->view->display(__DIR__ . '/../templates/task_add_form.php');			
		}else{
			$task = new \App\Models\ModelTask();
			$task->user_id_creator = 1;
			$task->user_id_assignee = 0;
			$task->task_name = $_POST['task_name'];
			$task->task_description = $_POST['task_description'];
			$task->task_date_creation = time();
			$task->task_status = 0;
			$task->insert();
			//TODO create a clear redirect with a message
			header('Location: /task');
		}
    }

    protected function actionDelete()
    {
    	$request = $_SERVER['REQUEST_URI'];
		$splits = explode('/', trim($request, '/'));
			if($splits[0] === "task" && $splits[1] === "delete"){
				$task = new \App\Models\ModelTask();
                $task->id = (int)$splits[2];
                $result = $task->delete($task->id);
                if ($result) {
                    header('Location: /task');
				}
		}
	}

}
