<?php

class Animal {
    public $name;
    public $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        return $this->sound;
    }
}
$cat = new Animal("Кошка", "Мяу");
$dog = new Animal("Собака", "Гав");

echo "$cat->name : {$cat->makeSound()}<br>";
echo "$dog->name : {$dog->makeSound()}<br>";