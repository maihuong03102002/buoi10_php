<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius ** 2;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}


$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea();
