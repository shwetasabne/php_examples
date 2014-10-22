<?php

class A {
    function foo(){
        if(isset($this)){
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        }else{
            echo "\$this is not defined.\n";
        }
    }
}

class B {
    function bar(){
        A::foo();
    }
}

class SimpleClass {
    public $var;
}

class Test {
    static public function getNew(){
        return new static;
    }
}

class Child extends Test{}

$obj1 = new Test();
var_dump($obj1);
$obj2 = new $obj1;
var_dump($obj2);
