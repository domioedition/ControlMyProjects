<?php


namespace App\Models;


class ModelUser extends Model
{
    const TABLE = 'users';


    public $id;
    public $name;
    public $email;
    public $password_hash;
    public $rights;

    public function findByEmail($e)
    {
        $db = Db::instance();
        return $db->query("SELECT * FROM " . static::TABLE.' WHERE email=:email',[':email' => $e], static::class)[0];
    }


}