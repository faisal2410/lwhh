<?php
namespace Project;

use MotorCycle;

include "c1.php";
include "c2.php";

use \Project\Motorcycles\Bike as Hornet;  // Alias

$b=new Bike();
echo $b->getName();

$h=new Hornet();
echo PHP_EOL;
echo $h->getName();
