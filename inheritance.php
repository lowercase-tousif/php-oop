<?php

/*
    What is Inheritance ?
    --> Inheritance is a fundamental principle of Object-Oriented Programming (OOP). It allows a new class (called the child or derived class) to inherit public and protected properties and methods from an existing class (the parent or base class).


    Class A
        - Hair color
        - Age
        - Height ( m )
    
    Class B
        - Class A


    Base class ( A )
    Derived Class ( B )


    MultiLevel Inheritance

    Class A
        - prop1
        - prop2
        - prop3

    Class B
        -prop1
        -prop2
        -ClassA
    Class C
        -prop1
        -prop2
        -ClassB
    

    Base class A
    Derived class B
    Derived class C 
*/

class Person
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}


class Student extends Person
{
    public $studentId;

    function __construct($name, $age, $studentId)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }

    function introduce()
    {
        return "My name is {$this->name} and I am {$this->age} years old. My student id is " . $this->studentId;

    }
}

$person1 = new Person("Tousif Tasrik", 21);
echo $person1->introduce() . "\n\n";
$student1 = new Student("Tousif Tasrik", 21, 232010130);
echo $student1->introduce() . "\n\n";




// Multilevel Inheritance


// Level 1 Base Class
class Vehicle
{
    public $color;
    public $engine;
    public $seats;

    function __construct($color, $engine, $seats)
    {
        $this->color = $color;
        $this->engine = $engine;
        $this->seats = $seats;
    }

    public function getVehicleDetails()
    {
        return "Color: {$this->color}, Engine: {$this->engine}, Seats: {$this->seats}";
    }

}


// Level 2 Derived from vehicle class
class Car extends Vehicle
{
    public $model;

    function __construct($color, $engine, $seats, $model)
    {
        $this->color = $color;
        $this->engine = $engine;
        $this->seats = $seats;
        $this->model = $model;
    }

    public function getCarDetails()
    {
        return "Color: {$this->color}, Engine: {$this->engine}, Seats: {$this->seats}" . ", Model: {$this->model}";
    }
}


// Level 3 Derived from Vehicle class
class SportsCar extends Car
{
    public $topSpeed;

    function __construct($color, $engine, $seats, $model, $topSpeed)
    {
        $this->color = $color;
        $this->engine = $engine;
        $this->seats = $seats;
        $this->model = $model;
        $this->topSpeed = $topSpeed;
    }

    public function getFullDetails()
    {
        return "Color: {$this->color}, Engine: {$this->engine}, Seats: {$this->seats}" . ", Model: {$this->model}" . ", Top Speed: {$this->topSpeed} km/h";
    }
}



$ferrari = new SportsCar("Red", "V8", 2, "Ferrari 48", 330);
echo $ferrari->getFullDetails() . "\n";