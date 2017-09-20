<?php

namespace App;

class Db
{
    protected $dbh;

    function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=controlmyprojects', 'root', '');
        }catch (\Exception $e){
            echo $e->getMessage();
            print " Check DB. ";
            exit(1);
        }
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        return $result;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        if (false !== $result) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}

?>
