<?php

class Bicycle
{

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private bool $hasLuggage;

    public function __construct(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function forward(): string
    {
        $this->currentSpeed;

        return "Go !";
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
}
