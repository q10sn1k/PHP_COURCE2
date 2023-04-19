<?php

// Определение базового класса
class Animal {

    // Публичное свойство
    public $name;

    // защищенное свойство
    protected $sound;

    // приватное свойство
    private $age;

    // публичный метод
    public function makeSound() {
        echo $this->sound;
    }

    // Защищенный метод
    protected function sleep() {
        echo "Животное спит";
    }

    // Приватный метод
    private function eat() {
        echo "Животное ест";
    }
}

// Определим класс Cat, который наследует свойства и методы от базового класса Animal
class Cat extends Animal {
    public function __construct(string $name, string $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    // Публичный метод, который использует защищенное свойство и защищенный метод базового класса
    public function play() {
        echo $this->name . "играет и издает звук: ";
        $this->makeSound();
        echo "<br>";
        $this->sleep();
    }
}

// Создадим объект класса Cat и используем публичное свойство и метод
$cat = new Cat("Кошка", "Мяу!");
$cat->play();

 // Ошибка доступа к приватному свойству и методу
 // $cat->age = 3;
 // $cat->eat();