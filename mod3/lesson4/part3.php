<?php

/*
    Напишем класс Person с защищенными свойсвами name и age, а также публичными методами
    getInfo() для получения информации о человеке и setAge() для установки возраста человека.

    Создадим класс Student, который будет наследоваться от класса Person и иметь
    дополнительное защищенное свойство course(курс) и публичный метод getCourse()
    для получения информации о курсе студента.
*/ 

class Person {
    protected $name;
    protected $age;

    public function setAge($age) {
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getInfo() {
        return "Имя: {$this->name}, Возраст: {$this->age}";
    }
}

class Student extends Person {
    private $course;

    public function getCourse() {
        return " Курс : {$this->course}";
    }

    public function setCourse($course) {
        $this->course = $course;
    }
}

// Создадим объекты классов Person и Student
$person = new Person();
$person->setName("Иван");
$person->setAge(30);


$student = new Student();
$student->setName('Анна');
$student->setAge(20);
$student->setCourse(2);

// Виводим информацию о человеке и студенте
echo $person->getInfo() . '<br>';
echo $student->getInfo() . $student->getCourse() . '<br>';

// echo $student->name; // Не выведется, так как у свойства модификатор доступа protected в классе Person