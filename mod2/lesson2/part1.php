<?php
    // регулярные выражения в php

    // https://www.php.net/manual/ru/function.preg-replace.php

    // preg_replace(что мы меняем, на что мы меняем, строка в которой мы производим поиск)

    // Пример:
    $res = preg_replace('#a#', '0', 'abcda');
    // echo $res; // 0bcd0

    // preg_replace - Выполняет поиск и замену по регулярному выражению

    // #.......# - ограничители регуляного выражения

    // # - ограничитель регулярного выражения

    // . - любой символ
    $pattern = '#a.a#';
    /*
        паттерн(шаблон) поиска
        В данном примере - a, потом любой символ, потом a
     */
    $replacement = '0';
    /*
        на что мы меняем ($replacement), найденные в строке ($subject)
        совпадения в соответвии с шаблоном($patten) поиска.
     */
    $subject = 'abc aca ada a1a';
    /*
        строка в которой мы производим поиск
     */

    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // abc 0 0 0

    //______________________________________________________________________

    $pattern = '#b.b#';
    $replacement = '0';
    $subject = 'bca b1f bab g2b';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // bca b1f 0 g2b

    /*
       Квантификаторы (операторы повторения символов в регулярных выражениях)

        + - повторение 1 и более раз
        * - повторение 0 и более раз
        ? - повторение 0 или 1 раз
     */

    // В шаблоне поиска xa+x, буква a должна встречаться 1 и более раз
    $pattern = '#xa+x#';
    $replacement = '0';
    $subject = 'xx xax xaax xaaax xab';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // xx 0 0 0 xab

    // В шаблоне поиска xa*x, буква a должна встречаться 0 и более раз
    $pattern = '#xa*x#';
    $replacement = '0';
    $subject = 'xx xax xaax xaaax xab';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 0 xab

    // В шаблоне поиска xa?x, буква a должна встречаться 0 или 1 раз
    $pattern = '#xa?x#';
    $replacement = '0';
    $subject = 'xx xax xaax xaaax xab';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 xaax xaaax xab

    //___________________________________________________________________________

    // группирующие скобки в регулярных выражениях - '(' и ')'
    $pattern = '#x(ab)+x#';
    /*
        ищу x, далее ab - 1 и более раз, потом x
     */
    $replacement = '0';
    $subject = 'xabx xababx xabababx xaax xaabbx';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 xaax xaabbx

    //____________________________________________________________________________

    // ЭКРАНИРОВАНИЕ специальных символов в регулярных выражениях

    $pattern = '#a\+x#'; // a+x
    /*
        Здесь символ + обозначает сам себя, так как
        квантификатор + экранирован символом \
     */
    $replacement = '0';
    $subject = 'a+x ax aax aaax';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 ax aax aaax

    /*
       Если мы хотим, чтобы в регулярных выражениях спец. символы обозначили
       сами себя, то нам необходимо экранировать их с помощью символа '/'
     */

    $pattern = '~a\.b~';
    $replacement = '0';
    $subject = 'a.b abc adi abx';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 abc adi abx

    /*
        Являеются спец. символами: * ? + . ^ $ \ / {} () [] |

        НЕ являются спец. символами: # ` ~ % & = _ - , : ; @ ' "

        Любой симол, который не является специальным символом можно использовать
        в качестве ограничителя регулярного выражения: # ` ~ % & = _ - , : ; @ ' "




        {} - c помощью фигурных скобок можно указывать конкретное количество
        повторений в шаблоне (паттерне) поиска регулярного выражения.
        {} - альтернатива квантификаторам, обладающая более широким
        спектром возможностей (функциональностью)


        Примеры использования:
        {7} - повторить 7 раз
        {5, 7} - повторить от 5 до 7 раз (включая 5 и 7 повторений)
        {5, } - 5 и более раз (включая 5 повторений)
     */

    // в шаблоне поиска ШАБЛОН, буква a должна встечаться от 1 до 3 раз
    $pattern = '#xa{1,3}x#';
    /*
        x, далее a от 1 до 3 раз, далее x
     */
    $replacement = '0';
    $subject = 'xx xax xaax xaaax xaaaax xaaaaaaaaaaaax xab xac xad';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // xx 0 0 0 xaaaax xaaaaaaaaaaaax xab xac xad

    // __________________________________________________________________
    /*
        Группы символов:

        \d - обозначает цифры от 0 до 9
        \w - обозначает цифры, буквы латинского алфавита и символ _
        \s - пробельный символ


        \D - НЕ цифры от 0 до 9
        \W - НЕ цифры, НЕ буквы латинского алфавита и НЕ символ _
        \S - НЕ пробельный символ.
     */

    $pattern = '#\d#'; // любая цифра (0-9)

    $replacement = 'K';

    $subject = '1 123 xax 1321 erfwe serger 9';

    $res = preg_replace($pattern, $replacement, $subject);
    echo $res; // K KKK xax KKKK erfwe serger K

