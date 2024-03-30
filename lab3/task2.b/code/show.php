<?php
session_start();

if(isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age']))
{
    $surname = $_SESSION['surname'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    echo "<h1>Данные</h1>";
    echo "
        <p>Фамилия: $surname</p>
        <p>Имя: $name </p> 
        <p>Возраст: $age</p>
        ";
} else {
    echo "<h1>Данные не найдены</h1>";
}