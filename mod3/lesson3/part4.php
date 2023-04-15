<?php

class Animal {
    public $name;
    public $sound;

    public function makeSound() {
        return $this->sound;
    }
}

$cat = new Animal();
$cat->name = 'Кошка';
$cat->sound = 'Мяу';

$dog = new Animal();
$dog->name = 'Собака';
$dog->sound = "Гав";

echo "$cat->name: {$cat->makeSound()}<br>";
echo "$dog->name: {$dog->makeSound()}<br>";