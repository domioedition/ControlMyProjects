<?php

namespace App\Models;


use App\Db;
use App\Model;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $rights;

    const TABLE = 'users';

}