<?php

require __DIR__ . '/autoload.php';

$db = new App\Db();
$res = $db->execute("");
var_dump($res);
?>
