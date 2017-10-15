<?php

namespace App\Controllers;

use App\View;

class ControllerNews
{
    protected $view;

    public function __construct()
    {
        //Создали объект view
        $this->view = new View();
    }

    /*прокси метод*/
    public function action($action)
    {
        $methodName = $action;
//        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
//        echo "test";
    }

    protected function actionIndex()
    {
        //Передали ему данные
        $this->view->news = \App\Models\ModelNews::findAll();
        //Дали команду отобразить шаблон
        $this->view->display(__DIR__.'/../templates/tpl_news.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\ModelNews::findById($id);
        $this->view->display(__DIR__.'/../templates/one.php');
    }
    protected function actionView()
    {
        $id = @(int)$_GET['id'];
        var_dump($this);
        $this->view->article = \App\Models\ModelNews::findById($id);
        $this->view->display(__DIR__.'/../templates/one.php');
    }

}


?>