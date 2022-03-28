<?php
require_once 'Vehicule.php';




    $Truck0 = new Truck("red", 3 , 10, 20, "nuk", 300, 500);

    var_dump($Truck0);
    echo '<br>';

    echo $Truck0->forward() . '<br>';

    echo '<br> Vitesse du Truck : ' . $Truck0->getCurrentSpeed() . ' km/h' . '<br>';

    echo $Truck0->brake() . '<br>';

    echo '<br> Vitesse du Truck : ' . $Truck0->getCurrentSpeed() . ' km/h' . '<br>';

    echo $Truck0->brake() . '<br>';

    echo '<br> les chargement du Truck : ' . $Truck0->isFilled() ;