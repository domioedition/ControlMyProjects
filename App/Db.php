<?php

namespace App;

class Db{
  protected $dbh;
  function __construct()
  {
    $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=controlmyprojects', 'root', '');
  }

  public function execute($sql)
  {
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute();
    return $result;
  }

  public function query($sql)
  {
    echo $sql;
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute();
    if(false !== $result){
      return $sth->fetchAll();
    }
    return [];
  }

}

?>
