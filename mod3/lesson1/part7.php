<?php
class Person {
    // свойства класса
    public $name;
    public $age;

    public function sayHello() {
        echo "Привет, меня зовут $this->name и мне $this->age лет <br>";
    }
}

class Student extends Person {
    // Дополнительное свойство
    public $university;

    // Дополнительный метод класса
    public function study() {
        echo "Я учусь в университете $this->university <br>";
    }
}

$student = new Student();
$student->name = 'Ольга';
$student->age = 20;
$student->university = 'Синергия';

$student->sayHello();
$student->study();

echo "__________________________________<br>";

$student2 = new Student();
$student2->name = 'Иван';
$student2->age = 23;
$student2->university = 'Синергия';

$student2->sayHello();
$student2->study();

