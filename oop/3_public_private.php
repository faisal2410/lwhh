<?php

class Fund{

    private $fund;

    public function __construct($initialFund=0)
    {
        $this->fund=$initialFund;
    }

    public function addFund($money){
        $this->fund+=$money;

    }

    public function deductFund($money){
        $this->fund-=$money;

    }

    public function getTotal(){
        echo "Total fund is {$this->fund} <br>";

    }
}


$ourfund=new Fund(1000);
$ourfund->addFund(20000);
$ourfund->deductFund(500);
$ourfund->getTotal();