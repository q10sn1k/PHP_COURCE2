<?php

// статические свойства и методы

class User
{
    private static int $count = 0;

    public static function getCount(): int
    {
        // при обращении к СТАТИЧНЫМ свойствам и медодам мы используем - `self::example`
        return self::$count;
    }

    public function __construct()
    {
        self::$count++;
    }
}

$user1 = new User();
$user2 = new User();
$user3 = new User();
$user4 = new User();
$user5 = new User();


// Статические методы принадлежат КЛАССУ
// Обращение к статическому свойству - `название_класса::название_метода`
echo User::getCount(); // 5

