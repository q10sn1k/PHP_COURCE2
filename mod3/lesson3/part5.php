<?php

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function substract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        return $a / $b;
    }
}

$calculator = new Calculator();

echo "Сложение: {$calculator->add(5, 3)}<br>";
echo "Вычитание: {$calculator->substract(5, 3)}<br>";
echo "Умножение: {$calculator->multiply(5, 3)}<br>";
echo "Деление: {$calculator->divide(5, 3)}<br>";