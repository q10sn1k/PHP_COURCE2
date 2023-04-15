<?php

class Rectangle {
    // свойства класса
    public $width;
    public $height;

    // методы класса
    public function getArea() {
        return $this->height * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Создадим объект класса
$rectangle = new Rectangle();
$rectangle->width = 10;
$rectangle->height = 5;

echo "Площадь прямоугольника: {$rectangle->getArea()}<br>";
echo "Периметр прямоугольника: {$rectangle->getPerimeter()}<br>";