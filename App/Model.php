<?php

namespace App;


abstract class Model
{
    const TABLE = '';
    public $id;

    // abstract public function getName();

    public static function find_all()
    {
        $db = Db::instance();
        return $db->query("SELECT * FROM " . static::TABLE, static::class);
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $columns) . ') VALUES (' . implode(',', array_keys($values)) . ')';
//        echo $sql;
        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function __destruct()
    {
        //        echo "Destructor is called for class " . __CLASS__ . "<br>";
    }
}
