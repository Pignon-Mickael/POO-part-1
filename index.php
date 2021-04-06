<?php 

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('Blue');
$car = new Car('yellow', 4, 'super-éthanol');

var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($car);

//moving car
echo $car->start() . '<br>';
echo $car->accelerate();
echo '<br> Vitesse actuelle de la voiture : ' .$car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse actuelle de la voiture : ' .$car->getCurrentSpeed() . ' km/h' . '<br>';
