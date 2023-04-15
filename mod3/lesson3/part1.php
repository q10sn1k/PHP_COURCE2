<?php

class Person {
    // Свойства класса
    public $name;
    public $age;

    // Методы класса
    public function sayHello() {
        echo "Привет, меня зовут $this->name и мне $this->age лет.<br>";
    }
}

//$person = new Person();
//
//$person->name = 'Иван';
//$person->age = 30;
//
//$person->sayHello();

// Наследование - это механизм, который позволяет создать новый класс на основе существующего.

class Student extends Person {
    public $university;

    public function study() {
        echo "Я учусь в университете {$this->university}<br>";
    }
}

$student = new Student();

$student->name = 'Иван';
$student->age = 21;
$student->university = 'Синергия.';

$student->sayHello(); // Привет, меня зовут Иван и мне 21 лет.
$student->study(); // Я учусь в университете Синергия.
