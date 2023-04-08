<!DOCTYPE html>
<html>
<head>
    <title>Передача нескольких параметров методом POST</title>
</head>
<body>
    <form action="part5.php" method="post">
        <label for="name">Введите Ваше имя:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="age">Введите Ваш возраст:</label>
        <input type="number" name="age" id="age"> <br><br>
        <label for="email">Введите Ваш email:</label>
        <input type="email" name="email" id="email"> <br><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email'])) {
          echo "<p>Ваше имя: {$_POST['name']}</p>";
          echo "<p>Ваш возраст: {$_POST['age']}</p>";
          echo "<p>Ваш email: {$_POST['email']}</p>";
        }
        header("Refresh: 15");
    ?>
</body>
</html>
