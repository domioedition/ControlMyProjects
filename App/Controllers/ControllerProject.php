<?php


namespace App\Controllers;


use App\Controller;
use App\View;

class ControllerProject extends Controller
{

    public $project_id;
    public $project;
	protected $view;

    public function __construct()
    {
        //$this->project_id = $id;
    }

    public function action($action)
    {
        $methodName = $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
		echo "<h1>List of projects</h1>";
		echo "<a href=\"/\">Up..</a>";
    }

}