<?php

namespace App\Controllers;

use App\View;

class ControllerTask
{
//    protected $task;
    protected $view;
    protected $params;

    public function __construct($params)
    {
//        parent::__construct();
        $this->view = new View();
        $this->params = $params;

        // var_dump($this->params);
    }

    public function action($action)
    {
        $methodName = $action;
//        $this->beforeAction();
        return $this->$methodName();
    }

    //Proxy method
    public function beforeAction()
    {
        echo 'Proxy method' . "<br>";
    }

    protected function actionIndex()
    {
        $this->view->tasks = \App\Models\ModelTask::findAll();
        $this->view->display(__DIR__ . '/../templates/tasks.php');
    }

    protected function actionOne()
    {
      //$id = (int)$_GET['id'];
        $id = $this->params;
        $this->view->task = \App\Models\ModelTask::findById($id);
        $this->view->comments = \App\Models\ModelComment::findAllComments(1,1);

        if($this->view->task === null){
            die("err");
        }
        $this->view->display(__DIR__.'/../templates/task.php');
    }

    protected function actionAdd()
    {
        //print_r($_POST);
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
				$taskId = (int)$splits[2];
				//TODO Create and finish this delete method. Delete must call from 'Model' class.
				$task->delete($taskId);
				$result = $task->delete($taskId);
				
				echo "The task should be deleted from the database, but it does not work yet";
				
				if ($result) {
					$this->view->display(__DIR__ . '/../templates/success.php');
				}	
		}
	}

}
