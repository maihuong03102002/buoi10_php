<?php

interface Resizable {
    public function resize($ratio);
}

// Triển khai interface "Resizable" trên lớp "Rectangle"
class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function resize($ratio) {
        $this->width *= $ratio;
        $this->height *= $ratio;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Kích thước ban đầu: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";

$rectangle->resize(3);
echo "Kích thước sau khi thay đổi: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";
