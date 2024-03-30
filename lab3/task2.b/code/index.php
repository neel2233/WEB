<?php
session_start();
if ($_POST)
{
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    
    header("Location: show.php");
    
}
?>

<!doctype html>
<html>
<body>
    <form method="post">
        <label for="surname">Фамилия:</label>
        <input name="surname" id="surname"><br>
        <label for="name">Имя:</label>
        <input name="name" id="name"><br>
        <label for="age">Возраст:</label>
        <input name="age" id="age"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>

