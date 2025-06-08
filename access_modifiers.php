<?php

/*
    Three Kinds of access modifiers
        - Public
        - Private
        - Protected
    
    Public:
        Class A {
            public $name;
            
            public function show(){
                echo $name;
            }
        }

    Private:
        Class A{
            private $name;

            private function show(){
                echo $name;
            }
        }
    
    Protected:
        Class A{
            protected $name;

            protected function show(){
                echo $name;
            }
        }


    1. Public Access Modifier

    * Inside the class itself.
    * From classes that inherit from it (child classes).
    * From outside the class (using an object instance).

    2. Private Access Modifier

    * It cannot be accessed by child classes.
    * It cannot be accessed from outside the class.

    3. Protected Access Modifier

    * Inside the class that defined it.
    * From classes that inherit from it (child classes).
    * It cannot be accessed from outside the class.

*/