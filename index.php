<?php

//Require the autoload file
require_once ('vendor/autoload.php');

//Turn on error reporting
ini_set('display-errors', 1);
error_reporting(E_ALL);

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo "hello";
});


//Run Fat-Free
$f3->run();