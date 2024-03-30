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
$text = $_POST['text'];
$email = $_POST['email'];
if(!is_dir("categories/$category/$email"))
{
    mkdir("categories/$category/$email");
}
chmod("categories/$category/$email", 0777);
$filePath = "categories/$category/$email/$title.txt";


if(false === file_put_contents($filePath, $text))
{
    throw new Exception('Somathing went wrong');
}
chmod($filePath, 0777);
redirectToHome();
