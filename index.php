<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){
    //echo '<h1>Welcome to my diner app!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

//define a route for breakfast menu
//route is what you defined in home.html
//the key is in home.htlm, the route is the value
$f3->route('GET /menus/breakfast', function(){
    echo '<h1>My Breakfast Menu!</h1>';

//    //render a view page
//    $view = new Template();
//    echo $view->render('views/home.html');
});

//run fat free
$f3->run();