<?php

class User
{
    public $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        // проверим возраст на корректность
        if ($this->validateAge($age)) {
            $this->age = $age;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    // метод валидации возраста (проверка на корректность значения)
    private function validateAge($age) {
        return $age >= 18;
    }
}

/*
    модификатор доступа public перед свойствами и методами (public $name)
    указывает на то, что эти свойства и методы доступны за пределами класса


    модификатор доступа private перед свойствами и методами (private $age)
    указывает на то, что эти свойства и методы НЕ доступны за пределами класса
 */

$user = new User();

// "прямое" обращение к свойствам
// $user->name = 'Ivan';
// $user->age = 25; // приведет к ошибке
/*
    к свойству name возможно "прямое" обращение,
    поскольку у свойства name модификатор доступа public

    к свойству age нельзя обращаться за пределами класса ("прямое" обращение)
    поскольку у свойства age модификатор доступа private
*/

$user->setName('Ivan');
$user->setAge(25);
echo "Name: {$user->getName()},<br>Age: {$user->getAge()}";