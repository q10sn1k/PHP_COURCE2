<?php

abstract class Vehicle
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    // абстрактный метод
    abstract public function drive();
}

class Car extends Vehicle
{
    public function drive() 
    {
        return $this->model . " едет по дороге.";
    }
}

$car = new Car("BMW");
echo $car->drive();