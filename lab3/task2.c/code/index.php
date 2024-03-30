<?php
session_start();
if ($_POST)
{
    $_SESSION['user'] = [
        'surname' => $_POST['surname'],
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary']
    ];
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
        <label for="salary">Зарплата:</label>
        <input name="salary" id="salary"><br>
        <input type="submit" value="Отправить">
    </form>
    <br>
    <a href='show.php'>Ссылка на страницу с данными</a>
</body>
</html>

