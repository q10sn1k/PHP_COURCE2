<?php
// создадим функцию для нахождения суммы цифр числа
function digitSum(int $number): int {
    $sum = 0;

    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }

    return $sum;
}

// echo digitSum(123); // 6


// создадим функцию для нахождения наименьшего элемента массива

function minElem(array $array){
    $min = $array[0];

    foreach ($array as $item) {
        if ($item < $min) {
            $min = $item;
        }
    }
    return $min;
}


// Найдем наименьший элемент в массиве
$arr = [1,2,3,4,5];
echo minElem($arr);