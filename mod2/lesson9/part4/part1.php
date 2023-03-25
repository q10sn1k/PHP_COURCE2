<?php

/*
  Найдем количество символов в строке.
 */

$pattern = '#.#'; // любой символ

// используем функцию preg_match_all, preg_match_all, чтобы вывести все совпадения в соответствии с регулярным варажением

$subject = '12345 hello world';

$result = preg_match_all($pattern, $subject);

// echo "Количество символов в строке subject - $result"; // 17


//__________________________
// функция подсчета символов в строке


function quantity_chars($str) {
    $pattern = '#.#'; // любой символ

    $result = preg_match_all($pattern, $str);

    return $result;
}

$text_test = 'hello world';
$res = quantity_chars($text_test);

echo $res; // 11