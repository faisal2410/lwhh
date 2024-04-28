<?php

function debug_foreach_loop($items)
{
    foreach ($items as $item) {
        debug_print_backtrace();
        echo $item."\n";
        // print_r(debug_backtrace());

    }
}

$items = ['A', 'B', 'C', 'D'];

// Call the debugging function
debug_foreach_loop($items);
