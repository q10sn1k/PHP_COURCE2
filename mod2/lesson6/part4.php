<?php
/*
   Задача: У нас есть пустой файл - file.txt
           Необходимо записать текст в file.txt и вывести текст из файла в браузер.
 */

// записываем данные (текст) в файл - file.txt
$file_name = 'file.txt';
$text = "Hello, I`m text";
file_put_contents($file_name, $text);

// Считываем данные из файла file.txt

$get_data = file_get_contents($file_name);

// Выведем данные
echo $get_data;