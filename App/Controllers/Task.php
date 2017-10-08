<?php

namespace App\Controllers;

use App\Controller;
use App\View;

class Task extends Controller
{
//    protected $task;
//    protected $x;

    public function __construct()
    {
//        parent::__construct();
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action'.$action;
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
        $this->view->tasks = \App\Models\Task::find_all();
        $this->view->display(__DIR__ . '/../templates/dashboard.php');
    }


    protected function actionTask()
    {
        $task_id = (int)$_GET['task_id'];
        $this->view->t = \App\Models\Task::find_by_id($task_id);
        var_dump($this->view->t);
$this->view->display(__DIR__ . '/../templates/task.php');
        // var_dump($task);
        // return $task;
//        $this->view->tasks = \App\Models\Task::find_by_id($task_id);
//        $this->view->display(__DIR__ . '/../templates/task.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->task = \App\Models\Task::find_by_id($id);
        $this->view->display(__DIR__ . '/../templates/task.php');
    }

    protected function actionAddForm()
    {
        $this->view->display(__DIR__.'/../templates/add_form.php');
    }

    protected function actionDelete()
    {
        $id = (int)$_GET['id'];
        $task = new \App\Models\Task();
        $result = $task->delete($id);
        if($result){
            $this->view->display(__DIR__.'/../templates/success.php');
        }

    }

}
