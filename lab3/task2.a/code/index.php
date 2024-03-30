<!doctype html>
<html>
<body>
    <form method="post">
        <textarea name="textarea"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if ($_POST)
{
    $text = $_POST["textarea"];
    $words = str_word_count($text);
    $chars = strlen($text);
    echo "<h1>Кол-во слов: $words, Кол-во символов: $chars</h1>"; 
}
?>
