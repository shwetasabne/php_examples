<?php
class A {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo "Class A \n";
    }
}

class B extends A {
    public static function test() {
        A::foo();
        echo "Parent class is ".get_parent_class()."\n";
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo "Class B \n";
    }
}
class C extends B {
    public static function who() {
        echo "Class C \n";
    }
}

C::test();
