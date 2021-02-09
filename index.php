<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start a session
session_start();


//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);
// Make a home page
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});


// Make a main order page
$f3->route('GET /order', function() {

    $view = new Template();
    echo $view->render('views/form1.html');
});

// Make a order two page
$f3->route('POST /order2', function() {

    var_dump($_POST);
    if(isset($_POST['food'])){
        $_SESSION['food'] = $_POST['food'];
    }
    if(isset($_POST['meal'])){
        $_SESSION['meal'] = $_POST['meal'];
    }
    $view = new Template();
    echo $view->render('views/order2.html');
});

// Make a summary route
$f3->route('POST /summary', function() {
//    echo "<p>POST:</p>";
//    var_dump($_POST);
//    echo "<p>SESSION:</p>";
//    var_dump($_SESSION);

    if(isset($_POST['conds'])){
        $_SESSION['conds'] = $_POST['conds'];
    }
    // if(isset($_SESSION['food'])){
    //     $_SESSION['food'] = $_SESSION['food'];
    // }
    // if(isset($_SESSION['meal'])){
    //     $_SESSION['meal'] = $_SESSION['meal'];
    // }
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3->run();

