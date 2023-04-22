<?php

abstract class Animal
{
    // Свойства класса
    public $name;

    // Абстрактный метод
    abstract public function makeSound();

    // Конеретный метод
    public function run() {
        echo "Бежит";
    }
}

// Наследуемся от абстрактного класса
class Cat extends Animal
{
    public function makeSound()
    {
        echo "Мяу";
    }
}

// Создаем объект класса Cat и вызываем методы
$cat = new Cat();
$cat->name = "Барсик";
$cat->makeSound();
$cat->run();
