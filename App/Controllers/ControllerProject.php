<?php

namespace App\Controllers;


class ControllerProject extends Controller
{

    public $project_id;
    public $project;
	protected $view;

    public function __construct()
    {
        //$this->project_id = $id;
    }

    protected function actionIndex()
    {
		echo "<h1>List of projects</h1>";
		echo "<a href=\"/\">Up..</a>";
    }

}