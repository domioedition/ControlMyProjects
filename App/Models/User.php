<?php

namespace App\Models;


use App\Db;
use App\Model;

class User extends Model
{
    public $user_id;
    public $name;
    public $email;
    public $rights;

    const TABLE = 'users';

    public function __construct()
    {

    }



}