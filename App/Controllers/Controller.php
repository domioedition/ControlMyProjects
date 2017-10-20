<?php

namespace App\Controllers;


use App\View;

class Controller
{
    protected $view = null;
    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = $action;
        return $this->$methodName();
    }
}