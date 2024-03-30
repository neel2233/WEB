
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска Объявлений</title>
</head>
<body>
    <form action='save.php' method='post'>
        <label for='email'>Email</label>
        <input type='email' name='email'></input><br>

        <label for='category'>Категории</label>
        <select name='category'>
            <?php
            $categories = [];
            $dir = opendir('categories');
            while($file = readdir($dir)) {
            if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
                array_push($categories, $file);
            }
            }
            closedir($dir);
            sort($categories);
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

</body>
</html>
