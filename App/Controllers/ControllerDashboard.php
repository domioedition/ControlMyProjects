<?php


namespace App\Controllers;


use App\Controller;
use App\View;

class ControllerDashboard extends Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/dashboard.php');
    }


}