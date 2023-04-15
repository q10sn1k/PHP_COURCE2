<?php

/*
    В PHP инкапсуляция реализуется с помощью модификаторов доступа (ключевых слов) public, protected и private
        - Public означает, что свойство или метод доступны из любой точки программы.
        - Private означает, что свойство или метод доступны только внутри класса
        - Protected означает, что свойство или метод доступны только внутри класса и его дочерних классов.
 */

// Создадим класс Car, в котором свойства $model и $price инкапсулированы с помощью модификатора доступа private

class Car {
    // Закрытые свойства класса
    private $model;
    private $price;

    // Методы класса
    public function __construct($model, $price) {
        $this->model = $model;
        $this->price = $price;
    }

    public function getModel() {
        return $this->model;
    }

    public function getPrice() {
        return $this->price;
    }
}