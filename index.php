<?php
session_start();
// 328/pets2/index.php
// this is my controller

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require
require_once('vendor/autoload.php');

// test pet
$myPet = new RoboticPet("dog", "blue", ["test", "test"]);
echo $myPet->listAccessories();

// instantiate the base F3 class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello from my Pets2 project!</h1>';

    // render a view page
    $view = new Template();
    echo $view->render('views/home-page.html');
});

// Order
$f3->route('GET|POST /order', function($f3) {
    //check if the form has been posted

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // get the data
        $pet = $_POST['pet'];
        $color = $_POST['color'];
        // validate the data
        if (empty($pet) || empty($color)) {
            echo "Please supply a pet type or color";
        }
        else { // data is valid
            $f3->set('SESSION.pet', $pet);
            $f3->set('SESSION.color', $color);
            // redirect to summary
            $f3->reroute("summary");
        }
    }

    // render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

// summary
$f3->route('GET /summary', function() {
    // render a view page
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

// run fat-free
$f3->run();