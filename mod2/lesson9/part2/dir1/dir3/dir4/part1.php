<?php

// Относительные пути

/*
    Структура директорий

    dir1
        dir2
            text.txt
        dir3
            dir4
                part1.php // мы находимся здесь
                text2.txt
            text.txt // необходимо получить данные из этого файла
    part2.php
    part3.php

 */

    $res = file_get_contents('../text.txt');

    echo $res;