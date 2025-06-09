<?php

use BcMath\Number;

/*
    Overriding Properties

    Class A{
        public $name = "Tousif";
    }

    Class B extends A{
        public $name = "Tasrik";
    }


    Overriding Methods
    
    Class A{
        public function test(){
            echo "Hello,World" . "\n";
        }
    }

    Class B extends A{
        public function test(){
            echo "TousifTasrik" . "\n";
        }
    }
*/


class base
{

    public $name = "Parent Class";

    public function calc($a, $b): int|float
    {
        return $a + $b;
    }
}

class derived extends base
{
    public $name = "Child class";

    public function calc($a, $b): int|float
    {
        return $a * $b;
    }
}

$obj1 = new base();
$obj2 = new derived();

// printing the properties
echo $obj1->name . "\n";
echo $obj2->name . "\n";

// printing the methods
echo $obj1->calc(5, 6) . "\n"; // Adding from the parent class
echo $obj2->calc(5, 6) . "\n"; // Multiplying from the derived class