<?php

/*
    классы могут реализовывать несколько интерфейсов
    для этого используется ключевое слово implements.
    При этом, класс должен реализовывать все методы, определенные в интерфейсах
*/

interface Bird
{
    public function fly();
}

interface Animal
{
    public function makeSound();
}

// класс Eagle реализовывает интерфейсы  Animal и Bird
class Eagle implements Animal, Bird
{
    public function makeSound()
    {
        return "Звук орла!<br>";
    }

    public function fly()
    {
        return "Орел летит.";
    }
}

$eagle = new Eagle();
echo $eagle->makeSound();
echo $eagle->fly();