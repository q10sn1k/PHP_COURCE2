<?php

// Создадим функцию для нахождения всех уникальных элементов массива

function unique(array $array): array {
    $result = [];

    foreach ($array as $item) {
        if (!in_array($item, $result)) {
            $result[] = $item;
        }
    }

    return $result;
}

$arr = [1, 2, 3, 4, 3, 5, 6, 5];
print_r(unique($arr)); // [1, 2, 3, 4, 5, 6]