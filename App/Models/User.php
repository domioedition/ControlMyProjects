<?php

namespace App\Models;


class User
{
    public $user_id;
    public $name;
    public $email;
    public $rights;

    public function __construct()
    {

    }

    public function getUser()
    {
        return ["id"=>$this->user_id];
    }


}