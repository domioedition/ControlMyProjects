<pre>
<?php

class test
{
    public $name = "Bob";
    public static function foo(){
        echo __METHOD__;
    }
}
// $class = "test";
// $method = "foo";
// $class::$method();


class test2{
  function __toString(){
    return __CLASS__;
  }
  function __invoke($x){
    return $x * $x;
  }

  function __set($name, $val){
    $this->$name = $val;
    echo "You tried to set {$name} to {$val}";
  }
  function __get($x){
    return "\ntest __get ".$x;
  }
}

// $class = "test";
// $method = "foo";
// $class::$method();

$test2 = new test2();
$test2->id = 300;
echo $test2->id;
// echo $test2->name;

//var_dump($x);
//var_dump($y);
