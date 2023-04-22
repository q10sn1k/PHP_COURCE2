<?php
/*
    Реализуем класс Calculator, у которого будут статические методы для выполнения
    основных математических операций: add, substract, multiply и divide
*/

class Calculator
{
    // Статические методы для выполнения мат. операций
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function substract(float $a, float $b): float
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public static function divide(float $a, float $b): float
    {
        if ($b == 0)
        {
            throw new Exception('Деление на ноль');
        }
        return $a / $b;
    }
}

echo Calculator::add(2, 3) . "<br>"; // 5
echo Calculator::substract(10, 5) . "<br>"; // 5
echo Calculator::multiply(2.5, 3) . "<br>"; // 7.5
echo Calculator::divide(10, 2) . "<br>"; // 5
echo Calculator::divide(10, 0) . "<br>"; // Деление на ноль