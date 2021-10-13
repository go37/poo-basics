<?php

$choice = readline("do you want to ride a bicycle (1) or drive a car (2) ? ");

if ($choice == 1) {

    require_once "Bicycle.php";

    $bikeSpeed = readline("What is your bicycle speed ? ");
    $bike = new Bicycle($bikeSpeed);

    echo $bike->forward() . PHP_EOL;
    echo "Bicycle speed : " . $bike->getCurrentSpeed() . " km/h" . PHP_EOL;
    echo $bike->brake() . PHP_EOL;
    echo "Bicycle speed : " . $bike->getCurrentSpeed() . " km/h" . PHP_EOL;
    echo $bike->brake() . PHP_EOL;

} elseif ($choice == 2) {

    require_once "Car.php";

    $carSpeed = readline("What is your car speed ? ");
    $carNbSeats = readline("Now many seats are in the car ? ");
    $carEnergy = readline("What is the enregy of the car ? ");
    $car = new Car($carSpeed, $carNbSeats, $carEnergy);

    echo $car->start() . PHP_EOL;
    echo $car->forward() . PHP_EOL;
    echo "Car speed : " . $car->getCurrentSpeed() . " km/h" . PHP_EOL;
    echo "Car number of seats : " . $car->getNbSeats() . PHP_EOL;
    echo "Car energy : " . $car->getEnergy() . PHP_EOL;
    echo $car->brake() . PHP_EOL;
    echo "Car speed : " . $car->getCurrentSpeed() . " km/h" . PHP_EOL;
    echo $car->brake() . PHP_EOL;

} else {

    echo "error ! choice 1 or 2 ... you're dead !!!" . PHP_EOL;

}
