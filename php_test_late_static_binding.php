<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

//B::test();

class C {
    private function foo() {
        echo get_class($this);
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class D extends C {
   /* foo() will be copied to B, hence its scope will still be A and
    * the call be successful */
}

class E extends C {
    private function foo() {
        /* original method is replaced; the scope of the new one is C */
    }
}

$d = new D();
$d->test();
//$e = new E();
//$e->test();
