<?php

class ParentClass {
    function __construct(){
        print "In parenct class constructor\n";
    }
}

class ChildClassOne extends ParentClass {
    function __construct(){

    parent::__construct();
        print "In child class one  constructor\n";
    }
}

class ChildClassTwo extends ParentClass{
    function __construct(){
        print "In class 2  constructor\n";
    }
}

class ChildClassThree extends ParentClass{
}

$base = new ParentClass();
$one = new ChildClassOne();
$two = new ChildClassTwo();
$three = new ChildClassThree();
