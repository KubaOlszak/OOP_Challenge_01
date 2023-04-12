<?php

require_once './Vehicle/Car.php';
require_once './Vehicle/Bicycle.php';

$carYellow = new Car('yellow', 5, 'électrique');
var_dump($carYellow);
$carRed = new Car('red', 4, 'fuel');
var_dump($carRed);
$bicycle = new Bicycle('blue', 1, 'physique');
var_dump($bicycle);

echo $carYellow->start('Car Y');
echo "Car Y roule à " . $carYellow->forward(10) . " km/h <br><br>";
echo "Car Y roule à " . $carYellow->getEnergy() . "<br><br>";


echo $carRed->start('Car R');
echo "Car R roule à " . $carRed->forward(15) . " km/h <br><br>";
echo "Car R roule à " . $carRed->getEnergy() . "<br><br>";

echo $carRed->brake('Car R');
$carRed->setEnergy('électrique');
echo $carRed->start('Car R');
echo "Car R roule maintenant à l'" . $carRed->getEnergy() . "<br><br>";

echo $bicycle->start('Bicyle');
echo "Le vélo roule à " . $bicycle->forward(8) . " km/h <br><br>";

echo $carYellow->brake('Car Y');
echo $carRed->brake('Car R');
echo $bicycle->brake('Vélo');







