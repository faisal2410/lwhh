<?php
$d1=new DateTime('20 June 2017');
$d2=new DateTime('27 May 2020');

$difference= date_diff($d1, $d2);

var_dump($difference->d);
echo PHP_EOL;
echo $difference->d;
echo PHP_EOL;

echo $difference->format("%y year %m months %d days");
