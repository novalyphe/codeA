<?php

// final klases negalima paveldeti ir keisti. mes klaida.


final class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

$a = new  BaseClass();
$a -> test();











