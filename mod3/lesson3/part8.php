<?php

class MyClass {
    // Деструктор
    public function __destruct() {
        echo "Объект удален";
    }
}

$object = new MyClass();
unset($object); // Удаление объекта
// Объект удален