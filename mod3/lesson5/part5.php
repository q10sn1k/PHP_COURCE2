<?php

abstract class Animal 
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function makeSound();
}

interface Flyable
{
    public function fly();
}

// Класс может насследоваться только от одного класса, но при этом
// может реализовывать как один, так и несколько интерфейсов


// класс Eagle наследует класс Animal и реализовывает интерфейс Flyable
class Eagle extends Animal implements Flyable
{
    public function makeSound()
    {
        return "звук орла!";
    }

    public function fly()
    {
        return "Орел летит.";
    }
}

$eagle = new Eagle('Орел');
echo $eagle->makeSound();
echo $eagle->fly();