<?php

class Car
{
    // реализация класса Car (чертеж автомобиля)
    public $color; // свойство цвета класса Car
    public $fuel; // свойство количества топлива
}

$my_car = new Car(); // создаем объект класса Car (на основе чертежа создаем автомобиль)
// устанавливаем свойства объекта $my_car
$my_car->color = 'green';
$my_car->fuel = 50;

echo "Цвет - $my_car->color, Объем топливного бака $my_car->fuel <br>";
// Цвет - green, Объем топливного бака 50

$my_car2 = new Car(); // создаем объект класса Car


// устанавливаем свойства объекта $my_car2
$my_car2->color = 'red';
$my_car2->fuel = 40;
echo "Цвет - $my_car2->color, Объем топливного бака $my_car2->fuel <br>";
// Цвет - red, Объем топливного бака 40