<?php

namespace App;


class Db
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        try {
//           $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=controlmyprojects', 'root', 'piramida123');
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=controlmyprojects', 'root', '');
        } catch (\Exception $e) {
            echo $e->getMessage();
            print " Check DB. ";
            exit(1);
        }
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($params);
        return $result;
    }

    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($params);
        if (false !== $result) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}

?>
