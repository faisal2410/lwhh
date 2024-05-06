<?php
session_name('myapp');
session_start();
// session_start([
//     'cookie_lifetime'=>60
// ]);
// $_SESSION['name']="Helen";

// echo $_SESSION['name'];

// session_destroy();

// $_SESSION['counter'] = $_SESSION['counter'] ?? 1;

// $_SESSION['counter']++;
// echo $_SESSION['counter'];


$_SESSION['name']="Ruby";

echo $_SESSION['name'];
// session_destroy();