<?php
spl_autoload_register(function ($className) {
    $path = strtolower(str_replace("CloudStorage\\", "", $className)) . ".php";
    $path = strtolower(str_replace("\\", "/", $path));
    include_once($path);
    // echo $path;
    // die();
    // echo $className;
    // die();

});