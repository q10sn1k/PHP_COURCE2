<?php

interface Vehicle
{
    // Vehicle - транспортное срдство
    // Методы интерфейса
    public function start();
    public function stop();
}

// "Наследуемся" от интерфейсв и реализуем его методы
// класс Car реализовывает интерфейс Vehicle
class Car implements Vehicle
{
    public function start()
    {
        return "Автомобиль завелся <br>";
    }

    public function stop()
    {
        return "Автомобиль заглушен <br>";
    }
}

// Создадим объект класса Car и вызовем его методы
$car = new Car();
echo $car->start();
echo $car->stop();
