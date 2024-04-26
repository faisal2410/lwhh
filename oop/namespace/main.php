<?php
namespace Astronomy;
include "Planet.php";
include "Earth.php";

// $planet=new \Astronomy\Planets\Planet();  // Qualified namespace
$planet=new Planets\Planet();  //Unqualified namespace
$planet->getName();

$earth=new Planets\Earth();

$datetime = new \DateTime();
echo $datetime->format('m/d/Y g:i A');
