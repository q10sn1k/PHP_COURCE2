<!DOCTYPE html>
<html>
<head>
    <title>Пример передачи массива данных методом GET</title>
</head>
<body>
    <?php
        $user_data = [
                'name' => 'Ivan',
                'age' => '30',
                'email' => 'ivan@example.com'
        ];

        $query_string = http_build_query($user_data);
    ?>
    <a href="part3.php?<?php echo $query_string;?>">Перейти на страницу</a>
</body>
</html>