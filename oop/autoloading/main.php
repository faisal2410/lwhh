<?php

function autoload($name){
include "{$name}.php";
}

spl_autoload_register("autoload");

(new Bike)->getType();
echo PHP_EOL;
(new Spaceship)->launch();