<?php

class Calculator {
    // Методы класса
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function miltiply($a, $b) {
        return $a * $b;
    }

    public function devide ($a, $b) {
        return $a / $b;
    }
}

// Создадим объект класса
$calculator = new Calculator();

echo "Сложение: {$calculator->add(5,3)} <br>";
echo "Вычитание: {$calculator->subtract(5,3)} <br>";
echo "Умножение: {$calculator->miltiply(5,3)} <br>";
echo "Деление: {$calculator->devide(5,3)}";