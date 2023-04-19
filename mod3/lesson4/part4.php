<?php

/*
    Реализуем базовый класс Car.
    Свойства класса Car: модель, год выпуска и цвет.
    Реализуем метод getInfo(), который возвращает информацию об автомобиле.

    Реализуем наследуемый от класса Car класс ElectricCar, который будет добавлять свойство battaryLife и
    методы setBatteryLife() и getBatteryLife() для установки и получения заряда батареи.
*/

class Car {
    // Защищенные свойства класса
    protected $model;
    protected $year;
    protected $color;

    // Конструктор класса
    public function __construct($model, $year, $color) 
    {
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;

    }

    public function getInfo() {
        return "Модель: $this->model Год: $this->year Цвет: $this->color";
    } 
}

class ElectricCar extends Car {
    // свойство класса
    private $batteryLife = 100;

    // методы класса
    public function setBatteryLife($batteryLife) {
        $this->batteryLife = $batteryLife;
    }

    public function getBatteryLife() {
        return $this->batteryLife;
    }
}

$car = new Car("BMW", 2015, 'черный');
$electricCar = new ElectricCar("Tesla", 2020, "красный");

echo $car->getInfo() . '<br>';
echo $electricCar->getInfo();

$electricCar->setBatteryLife(80);
echo " Заряд батареи: {$electricCar->getBatteryLife()}%";