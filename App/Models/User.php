<?php

namespace App\Models;



use App\Model;

class User extends Model
{
    const TABLE = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
    public $rights;

}