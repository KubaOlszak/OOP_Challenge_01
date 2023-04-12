<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;
    private string $ubniqueId;

    public function __construct (string $color, int $nbSeats, string $energy)
    {
        $this->ubniqueId = uniqid();
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }                                             
                                                    
    public function start($vehicleName): string
    {
        return "$vehicleName : Go ! <br>";
    }

    public function forward($currentSpeed): int
    {
        $this->currentSpeed = $currentSpeed;
        return $this->currentSpeed;
    }

    public function brake($vehicleName): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "$vehicleName Braking.. ";
        }
        $sentence .= "<br>The vehicle has stopped.<br><br>";
        return $sentence;
    }

    public function setColor (string $color): void
    {
        $this->color = $color;
    }

    public function getColor (): string
    {
        return $this->color;
    }

    public function setCurrentSpeed (int $speed): void
    {
        $this->currentSpeed = $speed;
    }

    public function getCurrentSpeed ()
    {
        return $this->currentSpeed;
    }

    public function setEnergy ($energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergy() : string
    {
        return $this->energy;
    }

}

