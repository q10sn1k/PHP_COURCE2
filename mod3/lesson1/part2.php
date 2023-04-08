<!DOCTYPE html>
<html>
<head>
    <title>Передача нескольких параметров методом GET</title>
</head>
<body>
    <form action="part2.php" method="get">
        <label for="name">Input your name:</label> <br>
        <input type="text" name="name" id="name" required> <br><br>
        <label for="age">Input your age:</label> <br>
        <input type="number" name="age" id="age" required> <br><br>
        <label for="email">Input your email</label> <br>
        <input type="email" name="email" id="email" required> <br><br>
        <input type="submit" value="Submit(Отправить)">
    </form>
    <?php
        if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])) {
//            $name = $_GET['name'];
//            $age = $_GET['age'];
//            $email = $_GET['email'];
//            echo "<p>Your name is $name</p>";
//            echo "<p>Your age is $age</p>";
//            echo "<p>Your email is $email</p>";
            echo "<p>Your name is {$_GET['name']}</p>";
            echo "<p>Your age is {$_GET['age']}</p>";
            echo "<p>Your email is {$_GET['email']}</p>";
        }
    ?>
</body>
</html>