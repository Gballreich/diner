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
    //echo '<h1>My Breakfast Menu!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});


//define a route for lunch menu
$f3->route('GET /menus/lunch', function(){
    //echo '<h1>My Breakfast Menu!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});

//define a route for dinner menu
$f3->route('GET /menus/dinner', function(){
    //echo '<h1>My Breakfast Menu!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/dinner-menu.html');
});

//define a route for order1
$f3->route('GET|POST /order1', function($f3){
    //echo '<h1>My Breakfast Menu!</h1>';

    //if the form has been posted
    if($_SERVER['REQUEST_METHOD'] == "POST"){
//        echo "<p> you got here using the POST method</p>";
//        var_dump($_POST);

        $food = $_POST['food'];
        $meal = $_POST['meal'];
        if(true){
            $f3->set('SESSION.food', $food);
            $f3->set('SESSION.meal', $meal);
        }
    }
    //render a view page
    $view = new Template();
    echo $view->render('views/order1.html');
});

//define a route for order1
$f3->route('GET /order2', function(){
    //echo '<h1>My Breakfast Menu!</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/order2.html');
});


//run fat free
$f3->run();