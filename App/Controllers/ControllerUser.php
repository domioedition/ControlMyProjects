<?php

namespace App\Controllers;

class ControllerUser extends Controller
{
    protected $user;

    public function __construct()
    {
        // parent::__construct();
    }

    public function register(){
        $userModel = new \App\Models\ModelUser();

        $userModel->name = $this->name;
        $userModel->email = $this->email;
        $userModel->password_hash = $this->password_hash;
        $userModel->rights = $this->rights;
        $userModel->insert();
    }


    public function findUserByEmail($email){
        $userModel = new \App\Models\ModelUser();
        $this->user = $userModel->findByEmail($email);
        return $this->user;
    }
    public function action($action)
    {
        $methodName = $action;
//        $this->beforeAction();
        return $this->$methodName();
    }
    public function actionIndex(){

      echo "some user information " . __FUNCTION__;
    }
    public function actionEdit(){

      echo "Edit information about user. Function name  : " . __FUNCTION__;
    }
}
