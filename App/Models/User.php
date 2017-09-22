<?php

namespace App\Models;


use App\Db;
use App\Model;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $rights;

    const TABLE = 'users';

    public function __construct()
    {

    }

    public function addUser()
    {
        
    }

    public function getUser()
    {

    }


}