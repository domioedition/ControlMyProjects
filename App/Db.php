<?php

namespace App;

class Db{
  protected $dbh;
  function __construct()
  {
    $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=controlmyprojects', 'root', '');
    // echo "Hellow Db! Class name: ". __CLASS__;
  }

  public function execute($sql)
  {
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute();
    return $result;
  }

  public function execute($sql)
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
