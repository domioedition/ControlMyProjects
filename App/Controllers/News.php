<?php

namespace App\Controllers;

use App\Controller;
use App\View;

class News extends Controller
{
    protected $view;
    protected $article;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
//        $this->beforeAction();
        return $this->$methodName();
    }

    //Proxy method
    public function beforeAction()
    {
        echo 'Proxy method' . "<br>";
    }

    protected function actionIndex()
    {
        $this->view->news = \App\Models\News::find_all();
        $this->view->display(__DIR__ . '/../templates/news.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::find_by_id($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }

    protected function actionAddForm()
    {
        $this->view->display(__DIR__.'/../templates/add_form.php');
    }

    protected function actionDelete()
    {
        $id = (int)$_GET['id'];
        $article = new \App\Models\News();
        $result = $article->delete($id);
        if($result){
            $this->view->display(__DIR__.'/../templates/success.php');
        }

    }

}