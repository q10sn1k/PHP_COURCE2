<?php

class Book {
    public $title;
    public $autor;
    private $price;

    public function getInfo() {
        return "Название книги: $this->title<br>
                Автор: $this->autor<br>
                Цена: $this->price<br>";
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}

$book = new Book();
$book->autor = "Федор Достоевский";
$book->title = 'Преступление и наказание';
$book->setPrice(500);

echo $book->getInfo();