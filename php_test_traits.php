<?php

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

/*Conflict resolution in traits*/
print "\nConflict resolution in traits\n";
trait smallTrait {
    public function sayHello(){
        echo "Small Hello\n";
    }

}

trait bigTrait {
    public function sayHello(){
        echo "Big Hello\n";
    }

}

class MyClass {
    use smallTrait, bigTrait{
        smallTrait::sayHello insteadof bigTrait;
        smallTrait::sayHello as talk;
        bigTrait::sayHello as speak;
        
    }
    
}

$o = new MyClass();
$o->sayHello();
$o->talk();
$o->speak();

/** Traits with Abstract methods **/
print "\nTraits with Abstract methods\n";
trait A {
     function sayHello(){
        print "Hello\n";
    }
    abstract function sayWorld();
}

class MyClassOne {
    use A;
    public function sayWorld(){
        print "World\n";
    }    
}

$o = new MyClassOne();
$o->sayHello();

/** Traits with static members **/
print "\nTraits with static members\n";
trait Y {
    public static $c=0;
    public function inc(){
        Y::$c++;
        print "Count is $c\n";
    }
}

class YClassOne {
    use Y;
}

class YClassTwo {
    use Y;
}

$yone = new YClassOne();
$ytwo = new YClassTwo();
$yone->inc();
$ytwo->inc();
