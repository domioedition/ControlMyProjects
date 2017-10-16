<?php


namespace App\Controllers;


use App\Controller;
use App\Models\ModelComment;

class ControllerComment extends Controller
{

    protected $comments;
    protected $view;

    public function __construct()
    {

    }
    public function action($action)
    {
        $methodName = $action;
        return $this->$methodName();
    }

    protected function actionIndex()
    {
        $this->view->comments = \App\Models\ModelComment::findAll();
        $this->view->display(__DIR__ . '/../templates/comments.php');
    }

    public function showAllComments($pid, $tid)
    {
        $this->comments = ModelComment::findAll();
        var_dump($this->comments);
        return $this->comments;
    }


}