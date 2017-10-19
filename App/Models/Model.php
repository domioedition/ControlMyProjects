<?php

namespace App\Models;

use App\Db;

class Model
{
    const TABLE = '';

    public $id;

    public function __construct()
    {
    //todo make constructor for one instance DB
    }

    public function isNew(){
        return empty($this->id);
    }

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query('SELECT * FROM '.static::TABLE, [], static::class);
    }
    public static function findById($id)
    {
        $db = Db::instance();
        $result = $db->query('SELECT * FROM '.static::TABLE . ' WHERE id=:id', [':id'=>$id], static::class)[0];
        return $result;
    }

    public function insert(){
        if(!$this->isNew()){
            return;
        }
        $columns = [];
        $values = [];
        foreach ($this as $key => $value) {
            if('id' == $key){
                continue;
            }
            $columns[] = $key;
            $values[':'.$key] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' ('.implode(',', $columns).') VALUES ('.implode(',', array_keys($values)).')';
        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id='.$id.'';
        $db = Db::instance();
        $result = $db->execute($sql);
        return $result;
    }


    public static function get_all_comments($pid, $tid)
    {
////     die("error");
//        $db = Db::instance();
//        $sql = "SELECT * FROM " . static::TABLE . " WHERE project_id = $pid AND task_id= $tid";
////        $sql = "SELECT * FROM comments where project_id=1 and task_id=25";
////        echo $sql;
//        $result = $db->query($sql, [], static::class);
//        return $result;
    }

}
