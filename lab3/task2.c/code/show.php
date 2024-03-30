<?php
session_start();

if(isset($_SESSION['user']))
{
    echo '<h1>Данные</h1>';
    echo '<ul>';
    foreach($_SESSION['user'] as $form => $data)
    {
        echo "<li>$form: $data</li>";
    }
    echo '</ul>';
} else {
    echo '<h1>Данные не найдены</h1>';
}