<?php

// для корректного отображения Кириллицы необходимо установить локаль

setlocale(LC_ALL, 'ru_RU');

// переименуем файл text1.txt в newText1.txt

// rename('text1.txt', 'newText1.txt');




// переименуем файл newText1.txt в text1.txt и переместим его в директорию dir

// rename('newText1.txt', 'dir/text1.txt');


// копирование файлов

// copy('text.txt', 'copyText.txt');



// удаление файлов

// unlink('copyText.txt');




// найдем вес файла в байтах.
// filesize()
$res_b = filesize('text.txt');
$res_kb = filesize('text.txt') / 1024;
$res_mg = filesize('text.txt') / (1024 * 1024);
$res_gb = filesize('text.txt') / (1024 * 1024 * 1024);

// echo "Размер файла text.txt - $res_b байт | $res_kb килобайт | $res_mg мегабайт| $res_gb гигабайт ";

// Размер файла text.txt - 8 байт | 0.0078125 килобайт | 7.62939453125E-6 мегабайт| 7.4505805969238E-9 гигабайт



// проверка существования файла

// echo file_exists('text.txt'); // 1 (true)
// echo file_exists('test123.txt'); // 0 (false)


/*
  Проверим существует ли файл text.txt
  если да то выведем размер файла,
  если нет то выведем - "файла не  существует"
 */

/*
if (file_exists('text.txt')){
    echo filesize('text.txt');
} else {
    echo 'файл не существует';
}
*/
// 8


/*
    Реализуем функцию которая вернет размер файла, если он существует.
    иначе вернем строку - 'файла не существует'
 */

function check_file($file_name){
    if (file_exists($file_name)){
        $res = filesize($file_name);
        return $res;
    } else {
        $res = 'Файл не существует';
        return $res;
    }
}


// тестируем - check_file
$file_name1 = 'text.txt';
$file_name2 = 'qwerty.txt';

$test1 = check_file($file_name1);
$test2 = check_file($file_name2);

// echo $test1; // 8

// echo $test2; // Файл не существует