<?php


namespace App\Controllers;


use App\Controller;
use App\Models\ModelComment;

class ControllerComment extends Controller
{

    protected $comments;

    public function __construct()
    {
        parent::__construct();
    }


    public function showAllComments($pid, $tid)
    {
        $this->comments = ModelComment::get_all_comments($pid,$tid);
//        var_dump($this->comments);
        return $this->comments;
    }


}