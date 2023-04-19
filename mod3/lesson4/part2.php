<?php

class Rectangle {
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends Rectangle {
    public function __construct($side)
    {
        parent::__construct($side, $side);
    }
}


$rectangle = new Rectangle(10, 5);
echo "Площадь прямоугольника: {$rectangle->getArea()}<br>";
echo "Периметр прямоугольника: {$rectangle->getPerimeter()}<br><br>";

$square = new Square(6);
echo "Площадь квадрата: {$square->getArea()}<br>";
echo "Периметр квадрата: {$square->getPerimeter()}";