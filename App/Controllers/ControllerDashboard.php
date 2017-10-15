<?php


namespace App\Controllers;


use App\Controller;
use App\View;

class ControllerDashboard extends Controller
{
    protected $view;

    public function __construct()
    {
        //Создали объект view
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
        $this->view->projects = \App\Models\ModelProject::showAllProjects();
        $this->view->display(__DIR__ . '/../templates/dashboard_all_projects.php');
    }


}