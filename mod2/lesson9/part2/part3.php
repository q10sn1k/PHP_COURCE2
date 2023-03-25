<?php

// Относительные пути

/*
   Структура директорий

    dir1
        dir2
            text.txt
        dir3
            dir4
                part1.php
                text2.txt // необходимо получить данные их этого файла
            text.txt
    part2.php
    part3.php // мы находимся тут

 */

    $res = file_get_contents('dir1/dir3/dir4/text2.txt');

    echo $res;