<?php


function custom_error_handler($severity, $msg, $file, $line){
echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
}

set_error_handler('custom_error_handler');

// trigger_error("This is an error");

// // echo substr("hello world",3);
// echo $book;


function division($divident, $divisor){
    if(0==$divisor){
        trigger_error("Cann't divide by 0");
    }
    echo $divident/$divisor;
}

division(50,0);