<?php

/*
    What is constructor?
    --> A constructor is a special method of a class or structure in object-oriented programming that initializes a newly created object of that type. Whenever an object is created, the constructor is called automatically.

    Constructor syntax:

    function __construct($categoryName){
        $this->categoryName = $categoryName;
    }
*/

class Bike
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "Name of the bike: " . $this->name . "\n";
    }
}


$bike1 = new Bike("Kawasaki Ninja");
$bike1->show();