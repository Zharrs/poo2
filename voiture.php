<?php

class Bicycle
{
 
    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats = 1;

    protected int $nbWheels = 2;

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
         $this->currentSpeed = $currentSpeed;
        }
    }
}

class newBicycle
{
    public function __construct(string $color, int $nbSeats , int $nbWheels, int $currentSpeed )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheel = $nbWheels;
        $this->currentSpeed = $currentSpeed;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
         $this->currentSpeed = $currentSpeed;
        }
    }

}

class Voiture
{
    public function __construct(string $color, int $nbSeats , int $nbWheels, int $currentSpeed, string $typeEnergie, int $nbEnergie)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheel = $nbWheels;
        $this->currentSpeed = $currentSpeed;
        $this->typeEnergie = $typeEnergie;
        $this->nbEnergie = $nbEnergie;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function run(): string
    {
        $this->currentSpeed = 25;
    
        return "Vroum !";
    }

    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
         $this->currentSpeed = $currentSpeed;
        }
    }
    
}
