<?php

class User
{
    // свойства
    public $name;
    public $age;

    // методы (метод по сути, тоже самое, что и функция, только реализовывается в классе)
    public function show($subject) {
        return $subject;
    }
}

// создаем объект класс User
$user1 = new User();

// устанавливаем свойства объекта $user1

$user1->name = 'Ivan';
$user1->age = 25;

// обратимся к методу show(В классах "функции" называются методами)

echo $user1->show("Hello i`m $user1->name and my age is $user1->age <br>");

// создадим 2-й объект класса User

$user2 = new User();
$user2->name = "Sergey";
$user2->age = 30;
// В классах методы принадлежат объекту класса
echo $user2->show("Name: $user2->name and Age: $user2->age");