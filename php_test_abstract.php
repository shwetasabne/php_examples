<?php

abstract class AbstractClass {
    abstract public function getValue();
    abstract public function prefixValue($prefix);
 public function printOut(){
        print $this->getValue()."\n";
    }
}

class ChildClass extends AbstractClass {

    public function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

$class1 = new ChildClass();
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";
