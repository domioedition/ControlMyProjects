<?php

namespace App\Controllers;

use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    //Proxy method
    protected function beforeAction()
    {
        echo 'Proxy method'."<br>";
    }

    public function actionIndex()
    {
        $this->view->news = \App\Models\News::find_all();
        $this->view->display(__DIR__ . '/../templates/news.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
//        $x = \App\Models\News::find_by_id($id);
//        var_dump($x);
        $this->view->article = \App\Models\News::find_by_id($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
//        var_dump($this->view->article);
    }
}