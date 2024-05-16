<?php

// 328/hello-fat-free/index.php
//this is my controller!

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require
require_once ('vendor/autoload.php');

//instantiate the F3 base class (F3 is fat free framework)
$f3 = Base::instance();

/* commented out because we can only run once.
Should be at end of the program.
this is a warning for future self.
//run Fat Free
$f3->run();
*/

//Define a default route
$f3->route('GET /', function (){
    //echo '<h1>Hello Fat-Free</h1>';

    //Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

//route for orders page
$f3->route('GET|POST /orders', function($f3)
{
    //echo "<h1>DOG</h1>";
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //check data is valid
        if (!empty($_POST['petType']) && ($_POST['petColor'] != 'None'))
        {

            //var_dump($_POST);
            //$f3->set('SESSION.petType', $_POST['petType']);
            //$f3->set('SESSION.petColor', $_POST['petColor']);
            if($_POST['type'] == "rock")
            {
                $f3->set('SESSION.pet',new RockPet($_POST['petType'], $_POST['petColor']));
            }
            else
            {
                $f3->set('SESSION.pet',new StuffedPet($_POST['petType'], $_POST['petColor']));
            }

            //send us to page 2
            $f3->reroute('summary');
        }
        else
        {
            echo "<h6>Please make sure both color and pet.php type are filled out</h6>";
        }
    }
    $view = new Template();
    echo $view->render('views/orders.html');
});

$f3->route('GET /summary', function ()
{
    //echo "<h1>Submit success</h1>";
    //var_dump($f3->get('SESSION'));
    $view = new Template();
    echo $view->render('views/summary.html');
});
//run Fat Free
$f3->run();
