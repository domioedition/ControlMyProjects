<?php

namespace App\Controllers;

use App\View;

class ControllerTask
{
//    protected $task;
    protected $view;

    public function __construct()
    {
//        parent::__construct();
        $this->view = new View();

    }

    public function action($action)
    {
        $methodName = 'action' . $action;
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


//    protected function actionTask()
//    {
//        $task_id = (int)$_GET['task_id'];
//        $this->view->tasks = \App\Models\Task::findById($task_id);
//        $this->view->display(__DIR__ . '/../templates/task.php');
//    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->task = \App\Models\ModelTask::findById($id);
        $this->view->display(__DIR__.'/../templates/one_task.php');
    }

    protected function actionAddForm()
    {
        $this->view->display(__DIR__ . '/../templates/add_form.php');
    }

    protected function actionDelete()
    {
        $id = (int)$_GET['id'];
        $task = new \App\Models\ModelTask();
        $result = $task->delete($id);
        if ($result) {
            $this->view->display(__DIR__ . '/../templates/success.php');
        }

    }

}
