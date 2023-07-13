<?php
abstract class Vehicle {
    abstract public function Start();
}

class Car extends Vehicle {
    public function Start() {
        return "Car started!";
    }
}

class Motorcycle extends Vehicle {
    public function Start() {
        return "Motorcycle started!";
    }
}

$car = new Car();
echo $car->Start() . "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->Start() . "<br>";