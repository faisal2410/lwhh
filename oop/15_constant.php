<?php

// const MY_CONST="Lead Educare";
// define("OK",123);


class MyClass{
    const CITY="Dhaka \n";  // constant always in static scope

    public function sayHi(){
        echo "Hi from ".self::CITY, "\n";
    }

}

$m=new MyClass();

// echo $m::CITY;
echo MyClass::CITY;

$m->sayHi();