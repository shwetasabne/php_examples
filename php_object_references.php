<?php
class Foo {
    public static $used = 0;
    private $id;
    public function __contruct(){
        $i = $used++;
    }
}

$a = new Foo;
$b = &$a;
var_dump($b);

$b = NULL;
var_dump($a);
