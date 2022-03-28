<?php
require_once 'voiture.php';


$Bicycle0 = new Bicycle("");

var_dump($Bicycle0);
echo '<br>';

echo $Bicycle0->forward() . '<br>';


echo '<br> Vitesse du vélo : ' . $Bicycle0->getCurrentSpeed() . ' km/h' . '<br>';

echo $Bicycle0->brake() . '<br>';

echo '<br> Vitesse du vélo : ' . $Bicycle0->getCurrentSpeed() . ' km/h' . '<br>';

echo $Bicycle0->brake() . '<br>';

$Bicycle1 = new newBicycle("red", 1 , 2, 15);

var_dump($Bicycle1);
echo '<br>';

echo $Bicycle0->forward() . '<br>';

echo '<br> Vitesse du vélo : ' . $Bicycle1->getCurrentSpeed() . ' km/h' . '<br>';

echo $Bicycle1->brake() . '<br>';

echo '<br> Vitesse du vélo : ' . $Bicycle1->getCurrentSpeed() . ' km/h' . '<br>';

echo $Bicycle1->brake() . '<br>';



$voiture0 = new voiture("red", 5 , 4, 25, "nuk", 100);

var_dump($voiture0);
echo '<br>';

echo $voiture0->forward() ;

echo '<br> Vitesse du voiture : ' . $voiture0->getCurrentSpeed() . ' km/h' . '<br>';

echo $voiture0->run() .'<br>';

echo '<br> Vitesse du voiture : ' . $voiture0->getCurrentSpeed() . ' km/h' . '<br>';

echo $voiture0->brake() . '<br>';

echo '<br> Vitesse du voiture : ' . $voiture0->getCurrentSpeed() . ' km/h' . '<br>';

echo $voiture0->brake() . '<br>';

