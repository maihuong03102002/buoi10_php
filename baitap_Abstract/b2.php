<?php

abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Gau! Gau!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

$dog = new Dog();
echo " Tiếng chó kêu :". $dog->makeSound()."<br>"; 
$cat = new Cat();
echo " Tiếng mèo kêu :".$cat->makeSound()."<br>"; 

