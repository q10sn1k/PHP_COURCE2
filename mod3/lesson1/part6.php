<?php
class Person {
    // свойства класса
    public $name;
    public $age;

    public function sayHello() {
        echo "Привет, меня зовут $this->name и мне $this->age лет";
    }
}

$person1 = new Person();
$person1->name = 'Иван';
$person1->age = 30;
$person1->sayHello();

echo "<br><br><br>";

$person2 = new Person();
$person2->name = 'Сергей';
$person2->age = 25;
$person2->sayHello();

echo "<br><br><br>";

$person3 = new Person();
$person3->name = 'Пётр';
$person3->age = 20;
$person3->sayHello();