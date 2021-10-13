<?php

class Car
{

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(int $currentSpeed, int $nbSeats, string $energy)
    {
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function forward(): void
    {
        $this->currentSpeed;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!" . PHP_EOL;
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        return "Go !";
    }
}
