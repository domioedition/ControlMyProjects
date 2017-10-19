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


//
//    protected function beforeAction()
//    {
//
//    }
//    protected function access()
//    {
//        return true;
//    }
//
//    public function action($name)
//    {
//        $this->beforeAction();
//        $actionName = 'action' . $name;
//        if ($this->access()) {
//            $this->$actionName();
//        } else {
//            die('Нет доступа');
//        }
//    }
}