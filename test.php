<pre>
<?php

class test
{
    public $name = "Bob";
    public static function foo(){
        echo __METHOD__;
    }
}
$class = "test";
$method = "foo";
$class::$method();


class test2 extends test {

}

$class = "test";
$method = "foo";
$class::$method();



//var_dump($x);
//var_dump($y);

