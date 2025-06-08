<?php

/*
    What is class ?
    --> In object-oriented programming, a class is a blueprint or template for creating objects. It defines the properties (data) and behavior (methods) that objects of that class will have.


    What is object ?
    -->  An object is a specific instance of a class, representing a real-world entity or concept with its own state and behavior. 


    Example:

    Car 
        - Color
        - Engine
        - Seats
        - AC
        - Price
    

    Maruti swift have ( object 1 )
        - Brown
        - 1200 cc
        - 5 seats
        - Yes
        - 5,50,000
    
    Toyota Fortuner have ( object 2 )
        - white
        - 2700 cc
        - 7 
        - Yes
        - 28,00,000

    
    What is properties ?
    --> $color, $price, $engine etc.. is known as properties
    --> properties are attributes or characteristics of an object, like the color or size of a car


    What is methods ?
    --> startCar(), stopCar(), getCarDetails() etc.. is known as methods
    --> Methods are actions that an object can perform, like starting or stopping a car


    Properties 
    $a , $b, $c

    Methods
    sum(){
        $c = $a + $b;
        return $c;
    }

    sub(){
        $c = $a - $b;
        return $c;
    }
*/


class Calculation
{
    public $a, $b, $c; // we can access this after creating an object because of the public

    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}


$c1 = new Calculation();
$c1->a = 10;
$c1->b = 20;

echo $c1->sum() . "\n";
echo $c1->sub() . "\n";


echo "\n--------------------------\n";

$c2 = new Calculation();
$c2->a = 50;
$c2->b = 60;

echo $c2->sum() . "\n";
echo $c2->sub() . "\n";