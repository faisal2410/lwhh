<?php
// var_dump(date_create("2024-5-4"));



// $date = [
//     '2019-1-3',
//     '19-1-3',
//     '3-1-2019',
//     '3-Jan-19',
//     '3-1-19', //php assume as y-m-d not d-m-y

//     '2019-3-1',
//     '19-3-1',
//     '1-3-2019',
//     '1-3-19',

//     '2019/3/1',
//     '19/3/1', //fail, php think is month 19
//     '1/3/2019', //php think is m/d/y
//     '1/3/19'
// ];

// //Y-M-d
// foreach ($date as $i => $d) {
//     $dateTime = date_create($d);
//     if ($dateTime !== false) {
//         echo $i . "\r\n";
//         echo date_format($dateTime, 'Y-M-d') . "\r\n";
//         echo "\r\n";
//     } else {
//         echo "Invalid date: $d \r\n";
//     }
// }

// echo date_default_timezone_get();

// echo time();
date_default_timezone_set('Asia/Dhaka');
// echo date_default_timezone_get();
// $current_time= time();

// echo date("Y-m-d g:ia",$current_time);
// echo PHP_EOL;
// $test= mktime(6,31);

// echo date( 'Y-M-d g:ia',$test);
// echo PHP_EOL;

// echo date('Y');
// echo PHP_EOL;
// echo microtime(true);
// echo PHP_EOL;
// echo microtime(false);

echo date('z');
echo "\n";
echo date('t');
echo "\n";
echo date('dS F, Y h:i:s A');
echo "\n";
echo date('d m Y', time()+24*60*60);



