<?php

/*
 * Maureen Kariuki
 * 01/15/2020
 * /328/chicken/index.php
 */

//Controller fr this project
 //Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require('vendor/autoload.php');

//Instantiate fat free
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo "Hello";
});

//Run F3
$f3->run();
?>

