<!DOCTYPE html>
<html>
<head>
    <title>передача параметра методом POST</title>
</head>
<body>
    <form action="part4.php" method="post">
        <label for="name">Input your name</label>
        <input type="text" name="name" id="name" required><br><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        if (isset($_POST['name'])) {
            echo "<p>Привет {$_POST['name']}</p>";
        }
    ?>
</body>
</html>