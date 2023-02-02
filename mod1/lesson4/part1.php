<?php
    /* Язык PHP яляется языком с динамической типизацией данных
    (Тип переменной определяется на основе её значения)
    */

    // массив создается с помощью функции []

    $arr1 = []; // создаем массив arr1 (на данный момент наш массив пуст)

    /*
        Особенность нумерации в массивах:
        Нумерация в массивах начинается с 0
     */
    $arr2 = [
        'понедельник', // 0-й элемент массива
        'вторник',  // 1-й элемент массива
        'среда',    // 2-й элемент массива
        'четверг', // 3-й элемент массива
        'пятница', // 4-й элемент массива
        'суббота', // 5-й элемент массива
        'воскресенье' // 6-й элемент массива
    ];

    // Элементы массива разделяются между собой запятой

    echo $arr2[0]; // понедельник
    echo '<br>';

    // выведем среду
    echo $arr2[2]; // среда
    echo '<br>';

    // распечатка массива
    var_dump($arr2);
    echo '<br>';

    // массивы можно заполнять разными типами данных
    $arr3 = [
        'понедельник',
        2,
        3.564,
        'среда',
        'четверг',
        'пятница',
        'суббота',
        7
    ];

    // распечатаем массив $arr3
    var_dump($arr3);

    // укажем ключи массива $arr4 в явном виде
    $arr4 = [
        1 => 'понедельник', // 1 - key (ключ), понедельник - value (значение)
        2 => 'вторник', // 2 - key, вторник - value
        3 => 'среда', // 3 - key, среда - value
        4 => 'четверг',// 4 - key, четверг - value
        5 => 'пятница', // 5 - key, пятница - value
        6 => 'cуббота', // 6 - key, cуббота - value
        7 => 'воскресенье' // 7 - key, воскресенье - value
    ];

    var_dump($arr4);

    $arr5 = [
        'первый день недели' => 'понедельник',
        'второй день недели' => 'вторник',
        'третий день недели' => 'среда',
        4 => 'четверг',
        5 => 'пятница',
        'Выходной 1' => 'суббота',
        'Выходной 2' => 'воскресенье'
    ];
    echo '<br>';
    echo '<br>';
    echo '<br>';
    var_dump($arr5);

    /*
        Ассоциативный массив:
        $arr = [
            key => value,
        ];

        Ассоциативный массив имеет следующий синтаксис:
        ключ, затем идет =>, далее следует значение

        Ключи могут быть не только числами, но также и строками.
     */

    /*
        создадим массив сотрудников $arr6, где коючами будут имена сотрудников,
        а значениями будут зарлаты сотрудников.
     */
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $arr6 = [
        'Петя' => 100, // Петя - key => 100 - value
        'Вася' => 200, // Вася - key => 200 - value
        'Миша' => 300 // Миша - key => 300 - value
    ];

    echo $arr6['Петя']; // 100
    echo '<br>';
    echo $arr6['Вася']; // 200
    echo '<br>';
    echo $arr6['Миша']; // 300



    echo '<br>';

    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // цикл foreach

    /*
        Цикл foreach имеет следующий синтаксис:

        foreach ($arr as $item) // $arr - название массива, $item - переменная для элемента массива
        {
            Код, который находится между фигурными скобками, будет повторяться
            столько раз сколько элементов в массиве
        }
     */

    echo 'Елементы массива выведены с помощью цикла foreach';
    echo '<br>';
    $arr7 = [1,2,3,4,5,6,7];
    foreach ($arr7 as $item) {
        echo $item . '<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    /*
        Цикл foreach следует использовать когда необходимо выполнить какие-либо
        действия над каждым элементом массива по отдельности

        Пример: умножим каждый елемент массива $arr7 на 2
        $arr7 = [1,2,3,4,5,6,7];
        В итоге необходимо получить 2,4,6,8,10,12,14
     */

    $i = 1;
    foreach ($arr7 as $item) {
        $res = $item * 2;
        echo "Значение $i-го элемента массива равно $res" . '<br>';
        $i++; // $i = $i + 1
    }
    echo '<br>';

    // Выведем элементы массива в абзацах
    $i = 1;
    $arr8 = [1,2,3,4,5,6,7,8];
    foreach ($arr8 as $item)
    {
        echo '<p>' . "$i-й элемент массива arr8, выведенный как параграф, = $item" . '</p>';
        $i++;
    }
    echo '<br>';