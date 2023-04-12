<?php

class User
{
    // свойства
    public $name;
    public $age;

    // методы
    public function show($subject) {
        return $subject;
    }

    // методы, которы устанавливают значения свойств, называют сеттеры
    // сеттер свойства name ($this->name)
    // в классах для того, что чтобы обратится к свойству необходимо использовать $this->prop_name - (в случае метода setName: $this->name)
    public function setName($name) {
        // В свойство $this->name запишем значение $name
        $this->name = $name;
    }

    // сеттер свойства age
    public function setAge($age){
        $this->age = $age;
    }

    // методы, которые возвращают значения свойств, называют геттерами
    // геттер свойства name
    public function getName() {
        return $this->name;
    }

    // геттер свойства age
    public function getAge(){
        return $this->age;
    }

}

$user1 = new User();

$user1->setName('Ivan');
$user1->setAge(29);

// echo $user1->getName(); // Ivan
// echo $user1->getAge(); // 29

echo "Name: {$user1->getName()},<br>Age: {$user1->getAge()}";