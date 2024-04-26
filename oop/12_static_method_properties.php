<?php

class MathCalculator
{
    private $number;
    static $name;
    static public function fibonacci($n)
    { 
        // $this->number = 12;  // we cannt use this in the static method
      echo self::$name ."\n";
        self::doSomething();
        echo "Fibonacci series up to {$n} \n";
    }


    static public function doSomething(){
        echo "Doing something \n";

    }
    public function factorial($n)
    {
       self::$name="ABCD";
        self::doSomething();
       $this->doSomething();
        echo "Calculating Factorial of {$n} \n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;
