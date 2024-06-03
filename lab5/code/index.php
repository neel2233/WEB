<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$ads = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        array_push($ads, $row);
    }
    $result->close();
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска Объявлений</title>
</head>
<body>
<div id='form'>
    <form action='save.php' method='post'>
        <label for='email'>Email</label>
        <input type='email' name='email'></input><br>

        <label for='category'>Категории</label>
        <select name='category'>
            <option value="cars">cars</option>
            <option value="clothes">clothes</option>
            <option value="gadgets">gadgets</option>
            <option value="other">other</option>
        </select><br>
        <label for='title'>Загаловок объявления</label>
        <input type='text' name='title'></input><br>

        <label for='text'>Текст объявления</label>
        <textarea cols='70' rows='10' name='text'></textarea>

        <input type='submit' value='Добавить'></input>
        </form>
</div>

<div id='table'>
        <table>
            <thread>
                <th>Категория</th>
                <th>Название</th>
                <th>Email</th>
                <th>Текст объявления</th>
            </thread>
            <tbody>
            <?php
            foreach($ads as $ad)
            {
                echo "<tr>";
                echo "<td>" . ($ad['category']) . "</td>";
                echo "<td>" . ($ad['title']) . "</td>";
                echo "<td>" . ($ad['email']) . "</td>";
                echo "<td>" . ($ad['description']) . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
</div>
</body>
</html>
