<?php
// получим количесво элементов массива

$arr = ['q','1','2','3',' ','/','r'];

// объявим счетчик и присвом ему значение 0;
$i = 0;

foreach ($arr as $item) {
    // Во время каждой итерации цикла увеличим значение счетчика на единицу
    $i++;
}

// Выведем результат.
// echo "Количество элементов в массиве arr - $i";

//________________________________________________________
// Задача найдем домены, доменные имена (карман), доменные зоны (2 каман).
// Найдем количесво совпадений

// Домен - site.ru; site - доменное имя, ru - доменноя зона
// site.ru example.com q10sn1k.exe site_example.net example_q10sn1k.site

$pattern = '#([\w-]+)\.([a-z]{2,})#';
$subject = 'site.ru example.com q10sn1k.exe site_example.net example_q10sn1k.site';
$res = preg_match_all($pattern, $subject, $matches);

//print_r($matches);

/*
  [
    0 => [0 => site.ru 1 => example.com 2 => q10sn1k.exe 3 => site_example.net 4 => example_q10sn1k.site],
    1 => [0 => site 1 => example 2 => q10sn1k 3 => site_example 4 => example_q10sn1k],
    2 => [0 => ru 1 => com 2 => exe 3 => net 4 = >site],
  ]
 */

// распечатаем доменные зоны 2-й карман
// print_r($matches[2]);

/*
   [
      [0] => ru [1] => com [2] => exe [3] => net [4] => site;
   ]
 */

// распечатаем домены
// print_r($matches[0]);

/*
    [
       [0] => site.ru [1] => example.com [2] => q10sn1k.exe [3] => site_example.net [4] => example_q10sn1k.site
    ]
 */

// ПОСЧИТАЕМ КОЛИЧЕСТВО ЭЛЕМЕНТОВ МАССИВА
// 1-Й СПОСОБ
/*
 Для этого введем счетчк и присвоим ему значение 0.
 Далее будем использовать цикл foreach и во время каждой итерации будем
 увеличивать значение счетчика на единицу
*/

$counter = 0;

foreach ($matches[0] as $item){
    $counter++;
}

// echo "Количество элементов массива matches[0] = $counter";
//______________________________________________________________________________
// 2-Й СПОСОБ
/*
  функция preg_match_all с аргументами $pattern и $subject или
  pattern, $subject, $matches1  в результате вернет
  количесвто всех совпадений в соответсвии с паттерном (шаблоном поиска)
 */
$res = preg_match_all($pattern, $subject, $matches1);
// echo "Количесво элементов массива matches[0] - $res";

//_____________________________________________________________________________
function S($a, $b){
    $result = $a * $b;
    // возвращаем значение
    return $result;
}

// Протестируем нашу функцию
// echo S(2,4);

//_______________________________________________________________________________
/*
  Задача 2: Создадим функцию которая будет искать слова из 5 букв.
            Найдем количество таких слов
 */

function five_items_words($str){
    $pattern = '#[a-zA-Zа-яА-ЯёЁ_-]{5}#u';

    $res = preg_match_all($pattern, $str);

    return $res;
}

// протестируем нашу функцию

$subject = 'asdff adfgh 0asd89 asdfg йцуке фывап йцукен фыв23';

$result = five_items_words($subject);

echo $result;