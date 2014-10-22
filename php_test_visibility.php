<?php

/** Property Visibility **/

class ParentClass {
    private $var_private;
    protected $var_protected;
    public $var_public;

    function __construct(){
        $this->var_private = 'Private';
        $this->var_protected = 'Protected';
        $this->var_public = 'Public';
    }
}

class ChildClass extends ParentClass {
    
}

$b = new ChildClass();
var_dump($b);
