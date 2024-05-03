<?php
require 'vendor/autoload.php';
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$path = 'credentials.json';
$client->setAuthConfig($path);

$service = new \Google_Service_Sheets($client);

$spreadsheetID = "1XA8j5N3baUvPhPHG8SBJyTkRefRUWSeNUefSwkDlwWU";
$spreadsheet = $service->spreadsheets->get($spreadsheetID);

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
            <?php
            $file = fopen('categories.txt', 'r');
            $text = fread($file, filesize('categories.txt'));
            $categories = explode("\n", $text);
            foreach($categories as $category)
            {
                echo "<option value='$category'> $category </option>";
            }
            ?>
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
            $range = 'Лист1';
            $response = $service->spreadsheets_values->get($spreadsheetID, $range);
            $rows = $response->getValues();
            array_shift($rows);
            foreach($rows as $row)
            {
                echo '<tr>';
                for($i = 0; $i < 4; $i++)
                {
                    echo "<td>{$row[$i]}</td>";
                }
                echo'</tr>';
            }
            ?>
            </tbody>
        </table>
</div>
</body>
</html>
