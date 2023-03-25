<?php

// Относительные пути

/*
   Структура директорий

    dir1
        dir2
            text.txt // необходимо получить данные из этого файла
        dir3
            dir4
                part1.php
                text2.txt
            text.txt
    part2.php // мы находимся тут
    part3.php

 */

    $res = file_get_contents('dir1/dir2/text.txt');

    echo $res;