<?php
    // foreach и html
    $arr = [1,2,3,4,5,6,7,8];
    foreach ($arr as $item) {
        // HTML код внутри цикла foreach, который выполнится 8 раз
?>
<!--
    Фрагмент php кода закрыт закрывающим тегом php (?>) и теперь мы будем писать
    HTML внутри цикла foreach
-->
    <p>{<?php echo $item?>}</p>
<?php
    }