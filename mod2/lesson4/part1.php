<?php
    // ИЛИ `|` в регулярных выражениях поиска
    $pattern = '#a{4}|b{4}#'; // 4 буквы a или 4 буквы b
    $replacement = '@';
    $subject = 'aaaa bbbb aaaa cccc dddd eeee ffff';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // @ @ @ cccc dddd eeee ffff

    // ______________________________________________________________
    $pattern = '#a{5}|b+#'; // a - 5 раз или b - от 1 раза и более
    $replacement = '@';
    $subject = 'aaaa bbb aaaa aaa ccc ddd bbbbbbbbbb eee fff';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // aaaa @ aaaa aaa ccc ddd @ eee fff

    // ________________________________________________________________
    $pattern = '#a{3}|b{1}|c{5}|\d{4}#'; // a - 3 раза ИЛИ b - 1 раз ИЛИ с - 5 раз или 4 цифры.
    $replacement = '$';
    $subject = 'aaaa b 2345 cccc ffff';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // $a $ $ cccc ffff

    // __________________________________________________________________
    $pattern = '#[A-Za-z]+|\d{2}#'; // буквы в верхнем и  нижнем регистре 1 раз и более или 2 цифры
    $replacement = '$';
    $subject = 'a abc abcd ajrtf 1 12 12';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // $ $ $ $ 1 $ $

    //_________________________________________________________________
    // буквы латинского алфавита от a - c (2 раза), либо цифры от 0 до 6 (2 раза), либо буквы латинского алфавита от x - z (2 раза)

    $pattern = '#[a-c]{2}|[0-6]{2}|[x-z]{2}#';
    $replacement = '$';
    $subject = 'af ab cb 69 50 23 yz';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // af $ $ 69 $ $ $


    /*
        \b - начало или конец слова
     */
    //_______________________________________
    // начинается с s заканчивается на z. Между s и z 4 буквы ИЛИ 3 циры
    $pattern = '#\bs[a-zA-Z]{4}z\b|\bs\d{3}z\b#';
    $replacement = '$';
    $subject = 'aaa sACFVz s123z s222rz';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // aaa $ $ s222rz

    // начинается с f заканчивается на y.
    // Между f и у 6 букв латинского алфавита или 4 цифры или 4 буквы латинского алфавита или 2 цифры
    $pattern = '#\bf[a-zA-Z]{6}y\b|\bf\d{4}y\b|\bf[a-zA-Z]{4}y\b|\bf\d{2}y\b#';
    $replacement = '$';
    $subject = 'aaa yACFVf s123z y2345f f23y fACFVy s222rz f2345y';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // aaa yACFVf s123z y2345f $ $ s222rz $

    //__________________________________________________________________________
    // особенности экранирования обратного слеша
    $str = '\\'; // \
    // echo $str;

    $str = '\\ \\\\'; // результат \ \\
    // echo  $str;

    $str = '\\ \\\\ \\\\\\ \\\\\\\\'; // \ \\ \\\ \\\\
    // echo  $str;


    /*
      если \ написать 1 раз, то это спец. символ, а если 2 раза то это будет обратный слеш.
     */

    // ______________________________________________________________________________________
    /*
        Обратный слеш является специальным символом в PHP.
        Для того, чтобы обратный слеш обозначал сам себя его необходино написать 2 раза "\\"

        В регулярных выражениях есть особенность:
        Для того чтобы обратный слеш внутри регулярного выражения обозначал
        сам себя его необходимо написать 4 раза \\\\
     */

    $pattern = '#\\\\#'; // \
    $replacement = '$';
    $subject = 'aaa \\ bbb cdefgh \\';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // aaa $ bbb cdefgh $

    //______________________________________________________________________________________
    $pattern = '@\\\\\\\\@'; // шаблон - 2 обратных слеша '\\'
    $replacement = '$';
    $subject = 'aaa \\ bbb \\\\ cdefgh \\ qwerty \\\\\\\\';
    // aaa \ bbb \\ cdefgh \ qwerty \\\\
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res;
    // aaa \ bbb $ cdefgh \ qwerty $$
    //______________________________________________________________________________________\

    /*
       В регулярных выражениях \ является специальным символом регулярного выражения,
       поэтому его необходимо экранировать, но так как обратный слеш является также спец.
       символом php нам необходимо экранировать оюратный слеш, то есть написать
       обратный слеш 4 раза в релярном выражении.
     */

    $pattern = '@\\\\\\\\\\\\@'; // шаблон - 3 обратных слеша '\\\'
    $replacement = '$';
    $subject = 'aaa \\ bbb \\\\ cde \\\\\\ swr45 \\\\\\ fgh \\ qwerty \\\\\\\\';
    $res = preg_replace($pattern, $replacement, $subject);
    echo $res; // aaa \ bbb \\ cde $ swr45 $ fgh \ qwerty $\