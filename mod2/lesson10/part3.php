<?php
/*
Задача: найти домен - site.ru
        найти доменное имя - site
        найти доменную зону - com
*/

/*
 Карманы в регулярных выражениях

 карманы в регулярных выражениях пишутся в круглых скобках - {}
 распологаются в массиве $matches
 */

$pattern = '#([a-z0-9_]+)\.([a-z]{2,})#';
/*
 шаблон поиска - домен
 пример - site.ru

 1-й карман - ([a-z0-9_]+)
 2-й карман - ([a-z]{2,})
 */

$subject = 'asdfghj site.ru qwerty123';

$res = preg_match($pattern, $subject, $matches);

/*
 3-й аргумент $matches в функции preg_match это массив

 0-й элемент массива содержит строку подходящую под шаблон поиска - $pattern
 $pattern = '#([a-z0-9_]+)\.([a-z]{2,})#' - домен (site.ru)

 1-й элемент массива содержит строку полходящую под 1-й карман регулярного выражения
 1-й карман - ([a-z0-9_]) - доменое имя (site)

 2-й элемент массива содержит строку подходяшую под 2-й карман регулярного выражения
 2-й карман - ([(a-z){2,}]) - доменая зона (ru)
 */

// распечатаем массив $matches c помощью var_dump или print_r

// print_r($matches);

// Array ( [0] => site.ru [1] => site [2] => ru )

/*
 [
    0 => 'site.ru', // 0-й элемент массива $matches (домен)
    1 => 'site', // 1-й элемент массива $matches (доменное имя)
    2 => 'ru' // 2-й элемент массива $matches (доменная зона)
 ]
 */

echo "Домен - $matches[0]" . '<br>' .
     "Доменое имя - $matches[1] (1-й карман регуляного выражения)" . '<br>' .
     "Доменая зона - $matches[2] (2-й карман регулярного выражения)" . '<br>';

/*
Домен - site.ru

Доменое имя - site (1-й карман регуляного выражения)

Доменая зона - ru (2-й карман регулярного выражения)
 */
