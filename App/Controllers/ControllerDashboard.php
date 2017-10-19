<?php

namespace App\Controllers;

class ControllerDashboard extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/dashboard.php');
    }

}