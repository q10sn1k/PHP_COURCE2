<?php
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

    // ограничение жадности в регулярных выражениях
    $pattern = '#a.+x#';
    $replacement = '0';
    $subject = 'aeeex zzz x ffff';
    $res = preg_replace($pattern, $replacement, $subject);
    // желаемый результата - 0 zzz x ffff
    // echo $res; // 0 ffff

    // для получения желаемого результата, необходимо ограничить жадность
    // регулярного выражения | желаемый результат  - 0 fff
    $pattern = '#a.+?x#';
    $replacement = '0';
    $subject = 'aeeex zzz x ffff';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 zzz x ffff
    // Жадность в регулярных выражениях можно ограничить всеми операторами повторения
    // Пример: {}?, +?, *?, ??

    /*
        Группы символов
        \d - цифры от 0 до 9
        \w - буквы латинского алфавита, цифры от 0 до 9 и _
        \s - пробельный символ
        \D - НЕ цифры от 0 до 9
        \W - НЕ буквы латинского алфавита, не цифры от 0 до 9 и не _
        \S - НЕ пробельный символ
     */

     // [] - любой символ из перечисленных, который находится внутри квадратных скобок
     $pattern = '#x[a-z]x#'; // x, любая буква латинского алфавита в нижнем регистре, х
     $replacement = '0';
     $subject = 'xax xbx xcx x1x x2x x3x';
     $res = preg_replace($pattern, $replacement, $subject);
     // echo $res; // 0 0 0 x1x x2x x3x

     // [] - являются регистрозависимыми
     $pattern = '#x[A-Z]x#'; // x, любая буква латинского алфавита в верхнем регистре, х
     $replacement = '0';
     $subject = 'xax xBx xvx xDx Xsx x1x x9x x0x'; // xax 0 xvx 0 Xsx x1x x9x x0x
     $res = preg_replace($pattern, $replacement, $subject);
     //echo $res; // xax 0 xvx 0 Xsx x1x x9x x0x


    $pattern = '#x[A-Za-z]x#'; // x, далее любая буква латинского алфавита как в нижнем, так и в
    // верхем регистре, далее х
    $replacement = '0';
    $subject = 'xax xBx xvx xDx Xsx x1x x9x x0x';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // '0 0 0 0 Xsx x1x x9x x0x'

    $pattern = '#x[A-Za-z0-9]x#';
    $replacement = '0';
    $subject = 'xax xBx xvx xDx Xsx x1x x9x x0x';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 0 Xsx 0 0 0


    $pattern = '#x[A-Za-z0-9]+x#';
    $replacement = '0';
    $subject = 'xax xBx xv876sev3x xDqerge784x Xsegrex x13535x x924x xwefwFFDSx x0x';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 0 Xsegrex 0 0 0 0

    $pattern = '#x[a-d]x#';
    // подходят следующие шаблоны - xax xbx xcx xdx
    $replacement = '0';
    $subject = 'xax xdx xcx x1x x2x x4x xDx xFx';
    $res = preg_replace($pattern, $replacement, $subject);
    //echo $res; // 0 0 0 x1x x2x x4x xDx xFx

    $pattern = '#x[A-Da-d0-3]x#';
    $replacement = '0';
    $subject = 'xax xdx xcx x1x x2x x9x x5x x4x xDx xFx';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 0 0 x9x x5x x4x 0 xFx

    //___________________________________________________________________________
    /*
        Особенности кирилических символов
        при использовании кирилических символов в шаблоне поиска надо добавить
        модификатор u после ограничителей регулярного выражения.

        ограничитель u
     */
    $pattern = '#[а-яё]#u';
    $replacement = '0';
    $subject = 'а я п р е ё';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // 0 0 0 0 0 0

    $pattern = '#[А-Яа-яЁё]#';
    $replacement = '0';
    $subject = 'а я п р е ё Ё а А Л Ж Й Я';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res;

    //_____________________________________________________________________________
    // инвертирование наборов символов в регулярных выражениях
    // ^ - инвертирование
    $pattern = '#x[^abc]r#';
    $replacement = '@';
    $subject = ' xar xbr xkr xjr xcr';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // xar xbr @ @ xcr

    //_____________________________________________________________________________
    /*
        В регулярных выражениях:
        спец. символами являются: * + ? ^ $ \ / {} () [] | .
        спец. символами не являются:  # ` ' " ~ % & = _ - @ , : ;

        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        Все специальные символы внутри квадратных скобок [] становятся обычными символами
        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
     */


    $pattern = '#x[a-z.]x#';
    $replacement = '@';
    $subject = 'xax xjx xlx xdx xmx x0x x6x x3x x1x x.x';
    $res = preg_replace($pattern, $replacement, $subject);
    // echo $res; // @ @ @ @ @ x0x x6x x3x x1x @

    /*
     Группы символов внутри квадратных скобок обозначают сами себя (\d \D \w \W \s \S)
     */

    $pattern = '#x[\d.]x#';
    $replacement = '@';
    $subject = 'xax xjx xlx xdx xmx x0x x6x x3x x1x x.x';
    $res = preg_replace($pattern, $replacement, $subject);
    //echo $res; // xax xjx xlx xdx xmx @ @ @ @ @

    //___________________________________________________________________________________
    /*
     Символы начала и конца строки в регулярных выражениях
        ^ - начало строки
        $ - конец строки
     */

    $pattern = '#^a+$#';
    $replacement = '0';
    $subject = 'aaaaaaaaaaaaaaaaaaaaaaa';
    $res = preg_replace($pattern, $replacement, $subject);
    echo $res; // 0


    //____________________________________________________________________________________
    /*
        Для того, чтобы символ ^ обозначал сам себя необходимо экрнировать его,
        либо разместить последним в квадратных скобках
     */

    $pattern = '#[d^]xx#';
    $replacement = '0';
    $subject = 'axx bxx cxx ^xx';
    $res = preg_replace($pattern, $replacement, $subject);
    echo $res;







