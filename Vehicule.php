<?php

require_once 'voiture.php';

class Truck extends Voiture
{
        public function __construct(string $color, int $nbSeats , int $nbWheels, int $currentSpeed, string $typeEnergie, int $nbEnergie, int $places)
    {
        parent::__construct($color, $nbSeats, $nbWheels, $currentSpeed, $typeEnergie, $nbEnergie);
        $this->places = $places;
        
    }
    public function isFilled(): string
        {
                if ($this->places < 500){
                    return "in filling";
                } else {
                    return "full";
                }
        }
        public function setStock($place){
                $this->place = $place;
        }
        
        public function getStock(){
                return $this->place;
        }
}

