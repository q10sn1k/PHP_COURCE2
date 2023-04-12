<?php

class User
{
    private $name;
    private $age;

    // конструктор вызывается в момент создания объекта класса
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getData() {
        return "Имя: $this->name,<br>Возраст: $this->age<br><br><br>";
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        // проверим возраст на корректность
        if ($this->validateAge($age)) {
            $this->age = $age;
        }
    }

    // метод валидации возраста (проверка на корректность значения)
    private function validateAge($age) {
        return $age >= 18;
    }
}

// конструктор вызывается в момент создания объекта класса
$user = new User('Ivan', 25);
echo $user->getData();

$user->setAge(30);
$user->setName('Gleb');
echo $user->getData();

// возраст не изменится, т. к. не пройдет валидацию
$user->setAge(10);
echo $user->getData();

// возраст изменится, т.к. пройдет валидацию
$user->setAge(20);
echo $user->getData();
