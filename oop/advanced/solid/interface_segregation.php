<?php
// interface Vehicle{
//     public function hasTwoTires();
//     public function hasFourTires();
//     public function hasSixTires();
//     public function isDieselCompatible();
//     public function isPetrolCompatible();
//     public function getMileage();
// }
interface Vehicle{
   
    public function getMileage();
    public function getName();
    public function getPrice();

}

interface TwoWheelers{
    public function hasTwoTires();
}

interface FourWheelers{

}

interface SixWheelers{

}

class MotorCycle implements Vehicle, TwoWheelers{

}

class Truck implements Vehicle, SixWheelers{

}