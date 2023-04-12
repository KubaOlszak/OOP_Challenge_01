<?php

require_once './Vehicle/Vehicle.php';

$carYellow = new Vehicle('yellow', 5, 'électrique');
$carRed = new Vehicle('red', 4, 'fuel');
$bicycle = new Vehicle('blue', 1, 'physique');

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







