<?php

class ParentClass {
    static $foo = 'bar';
    function staticValue(){
        return self::$foo;
    }
}

class ChildClass extends ParentClass {

    public $a = 'a';

    public  function foo(){
        return $this->a;
    }

    public static function bar(){
        return parent::$foo;
    }

}

$p = new ParentClass();
print 'ParentClass::$foo'."\n";
var_dump(ParentClass::$foo);

print '$p->staticValue()'."\n";
var_dump($p->staticValue());
//var_dump(ChildClass::$foo);
//var_dump(ChildClass::foo());


$c = new ChildClass();
print '$c->foo()'."\n";
var_dump($c->foo());

print 'ChildClass::bar()'."\n";
var_dump(ChildClass::bar());
