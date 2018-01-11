<?php

//abstraktine klase galime naudoti tik extendindami
//o abstraktine funkcija negali buti naudojama pirma neaprasant
//relia finkcija pvz protected

abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

//$a = new AbstractClass (); //meta klaida

class ConcreteClass1 extends AbstractClass
{

    protected function getValue() {
        return "ConcreteClass";
    }


    public function prefixValue($prefix) {
        echo "{$prefix}_{$this->getValue()}";
    }
}

$class1 = new ConcreteClass;

$class1->prefixValue('Labas');

















