<?php

require_once "classes/Car.php";


//create a class instance/object 
$bmw = new Car;

$bmw->color = "Red";

echo $bmw->color;

echo "<br>";

echo $bmw->get_speed(100);

echo "<br>";

$mercedez = new Car;



echo "<br>";

echo $mercedez->get_details();

echo "New line added";
