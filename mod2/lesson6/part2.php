<?php
    /*
        Задача: найдем количество символов в строке.
     */

    $pattern = '#.#'; // любой символ

    // используем функцию preg_match_all, чтобы вывести все совпадения в соответствии с регулярным выражением

    $subject = 'qwerty word';
    $result = preg_match_all($pattern, $subject);

    echo "Количество символов в строке subject - $result";