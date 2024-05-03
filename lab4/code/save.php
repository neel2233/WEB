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
$text = $_POST['text'];
$email = $_POST['email'];

$newRow = [
    $category,
    $title,
    $email,
    $text
];

$rows = [$newRow];
$valueRange = new \Google_Service_Sheets_ValueRange();
$valueRange->setValues($rows);
$range = 'Лист1';
$options = ['valueInputOption' => 'RAW'];
$service->spreadsheets_values->append($spreadsheetID, $range, $valueRange, $options);
redirectToHome();
