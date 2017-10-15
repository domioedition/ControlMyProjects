<?php


namespace App\Controllers;


use App\Controller;

class ControllerProject extends Controller
{

    public $project_id;
    public $project;

    public function __construct($id)
    {
        $this->project_id = $id;
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
//        $this->view->projects = \App\Models\ModelProject::showAllProjects();
        $this->view->tasks = \App\Models\ModelTask::get_all_tasks_for_project_id($this->project_id);
        $this->view->display(__DIR__ . '/../templates/project.php');
    }

}