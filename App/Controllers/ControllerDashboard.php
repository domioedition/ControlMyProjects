<?php


namespace App\Controllers;


use App\Controller;

class ControllerDashboard extends Controller
{

    public $dashboard;

    public function action($action)
    {
        $methodName = 'action' . $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
        $this->view->projects = \App\Models\ModelProject::showAllProjects();
        $this->view->display(__DIR__ . '/../templates/dashboard_all_projects.php');
    }


}