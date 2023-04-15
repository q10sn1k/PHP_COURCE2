<?php

class Person {
    public $name;
    public $age;

    // Конструктор (конструктор вызывается в момент создания объекта класса)
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

/*
  Конструктор определяется при помощи метода __construct()

  В конструктор передаются аргументы $name и $age, которые используются для инициализации свойств $name и $age;
 */

// конструктор вызывается в момент создания объекта класса
$person = new Person('Иван', 30);

echo $person->name;
echo "<br>";
echo $person->age;