<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP in html</title>
</head>
<body>
<?php
    $arr = [1,2,3,4];

    foreach ($arr as $item){
        echo "<p>"."ПРИВЕТ ИЗ PHP. Я запись $item"."</p>"."<br>";
    }
?>
</body>
</html>