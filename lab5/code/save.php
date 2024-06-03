<?php
function redirectToHome()
{
    header('Location: index.php');
    exit();
}

if(false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['text']))
{
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['text'];
$email = $_POST['email'];
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
$mysqli->close();

redirectToHome();
