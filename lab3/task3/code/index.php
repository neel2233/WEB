
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
            $categories = [];
            $dir = opendir('categories');
            while($file = readdir($dir)) 
            {
            if (is_dir('categories/'.$file) && $file != '.' && $file != '..') 
            {
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
            $categories = [];
            $dir = opendir('categories');
            while($file = readdir($dir)) 
            {
            if (is_dir('categories/'.$file) && $file != '.' && $file != '..') 
            {
                array_push($categories, $file);
            }
            }
            closedir($dir);
            foreach($categories as $category)
            {
                $users = [];
                $dir = opendir("categories/$category");
                while($file = readdir($dir)) 
                {
                    if (is_dir("categories/$category/".$file) && $file != '.' && $file != '..') 
                    {
                        array_push($users, $file);
                    }
                }
                closedir($dir);
                foreach($users as $user)
                {
                    $items = [];
                    $dir = opendir("categories/$category/$user");
                    while($file = readdir($dir)) 
                    {
                        if (is_file("categories/$category/$user/".$file) && $file != '.' && $file != '..') 
                        {
                            array_push($items, $file);
                        }
                    }
                    closedir($dir);
                        foreach($items as $item)
                        {
                            $file = fopen("categories/$category/$user/$item", 'r');
                            $text = fread($file, filesize("categories/$category/$user/$item"));
                            fclose($file);
                            $title = preg_replace('/.txt/', '', $item);
                            echo "
                            <tr>
                                <td>$category</td>
                                <td>$title</td>
                                <td>$user</td>
                                <td>$text</td>
                            </tr>
                            ";
                    }
                }
            }
            ?>
            </tbody>
        </table>
</div>
</body>
</html>
