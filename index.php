<?php

// 328/pets2/index.php
// this is my controller

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require
require_once('vendor/autoload.php');

// instantiate the base F3 class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello from my Pets2 project!</h1>';

    // render a view page
    $view = new Template();
    echo $view->render('views/home-page.html');
});

// run fat-free
$f3->run();