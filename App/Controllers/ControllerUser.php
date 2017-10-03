<?php

namespace App\Controllers;


use App\Controller;


class ControllerUser extends Controller
{

    protected $user;

    public function __construct()
    {
        parent::__construct();
    }

    public function register(){
        $userModel = new App\Models\ModelUser();

        $userModel->name = $this->name;
        $userModel->email = $this->email;
        $userModel->password_hash = $this->password_hash;
        $userModel->rights = $this->rights;

        $userModel->insert();

//        print_r($userModel);
    }


    public function findUserByEmail($email){
        $userModel = new App\Models\ModelUser();
        $this->user = $userModel->findByEmail($email);
        return $this->user;
    }
}