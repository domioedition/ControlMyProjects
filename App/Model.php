<?php

namespace App;


class Model
{
    const TABLE = '';

    public static function find_all()
    {
        $db = new Db();
        return $db->query("SELECT * FROM " . static::TABLE, static::class);
    }

    public function __destruct()
    {
//        echo "Destructor is called for class " . __CLASS__ . "<br>";
    }
}