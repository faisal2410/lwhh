<?php

trait NumberSeriesOne{
   public function numberSeriesA(){
    echo "Number Series A \n";
   }

   public function numberSeriesB(){
    echo "Number Series B \n";
   }
}

class SomeClass{

    public function numberSeriesA()
    {
        echo "Printing Printing Number Series A \n";
    }

}

class NumberSeries extends SomeClass{
    // use NumberSeriesOne;
    use NumberSeriesOne{
        numberSeriesA as numberSeriesAA;
    }

    // public function numberSeriesA()
    // {
    //     echo "Printing Number Series A \n";
    // }

    public function numberSeriesA()
    {
        echo "Printing Printing Number Series A \n";
    }


}

$ns=new NumberSeries();
$ns->numberSeriesAA();
$ns->numberSeriesA();