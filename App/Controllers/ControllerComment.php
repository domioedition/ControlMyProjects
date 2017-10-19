<?php

namespace App\Controllers;

use App\Models\ModelComment;

class ControllerComment extends Controller
{

    protected function actionIndex()
    {
        $this->view->comments = \App\Models\ModelComment::findAll();
        $this->view->display(__DIR__ . '/../templates/comments.php');
    }
	
	protected function actionAdd()
    {
		$comment = new \App\Models\ModelComment();
		
		$comment->project_id = $_POST['project_id'];
		$comment->task_id = $_POST['task_id'];
		//TODO change user, tajke it from session
		$comment->user_id = 1;
		$comment->content = $_POST['comment'];
		$comment->date = time();
		$comment->insert();
		//TODO create a clear redirect with a message
		header('Location: /task/one/'.$_POST['task_id']);
    }

    protected static function showCountComments($pid, $tid)
    {
        //TODO Implements count coometns
        echo "Here we show comments";
//        $this->comments = ModelComment::getCountComments();
//        return $this->comments;
    }
	
	
    protected function showAllComments($pid, $tid)
    {
        $this->comments = ModelComment::findAll();
        //var_dump($this->comments);
        return $this->comments;
    }

}