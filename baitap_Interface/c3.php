<?php

interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        return $this->radius;
    }
}


class Square implements Drawable {
    private $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function draw() {
        return $this->sideLength;
    }
}

$circle = new Circle(5);
echo "Vẽ hình tròn với bán kính: " . $circle->draw(). "<br>";


$square = new Square(10);
echo "Vẽ hình vuông với độ dài cạnh: " . $square->draw(). "<br>";
