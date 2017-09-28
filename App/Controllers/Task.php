<?php

namespace App\Controllers;

use App\Controller;
use App\View;

class Task extends Controller
{
    protected $task;

    public function __construct()
    {
        parent::__construct();
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
        $this->view->tasks = \App\Models\Task::find_all();
        $this->view->display(__DIR__ . '/../templates/task.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\Task::find_by_id($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
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