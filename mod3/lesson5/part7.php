<?php

/*
    Реализуем класс Rectangle, у которого будет статическое свойство count 
    для подсчета количества созданных объектов этого класса, а также методы getArea и getPerimeter 
    для выисления площади и периметра прямоугольника соответственно
*/

// Абстрактный класс фигуры
abstract class Figure 
{
    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;
}

// Класс прямоугольника, наследуемый от абстрактного класса Figure
class Rectangle extends Figure
{
    // Нестатичные свойства
    private float $width;
    private float $height;

    // Статичные свойства
    private static int $count = 0;

    public function __construct(float $width, float $height)
    {
        // Обращаемся к Нестатичным свойствам и методам через $this->название_свойства
        $this->width = $width;
        $this->height = $height;
        
        // Обращаемся к Статическим свойствам и методам через self::название_свойства
        self::$count++; // увеличиваем счетчик объектов при каждом создании экземляра класса
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }

    // Статический метод для получения количества созданных объектов
    public static function getCount(): int
    {
        return self::$count;
    }
}

// Создаем объекты прямоугольников
$rectangle1 = new Rectangle(5, 10);
$rectangle2 = new Rectangle(7, 3);

// Выведем площади и периметры прямоугольников
echo "Площадь прямоугольника 1: " . $rectangle1->getArea() . "<br>";
echo "Периметр прямоугольника 1: " . $rectangle1->getPerimeter() . "<br>";

echo "Площадь прямоугольника 2: {$rectangle2->getArea()}<br>";
echo "Периметр прямоугольника 2: {$rectangle2->getPerimeter()}<br>";

// Выводим количество созданных объектов
echo "Количество созданных объектов: " . Rectangle::getCount();