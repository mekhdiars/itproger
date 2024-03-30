<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <?php

    $arrayFilms = explode(',', $_POST['films']);
    $countFilms = count($arrayFilms);

    if (mb_strlen($_POST['name']) < 3) {
        echo 'Имя не менее 3 символов';
        exit();
    }
    else if (mb_strlen($_POST['email']) < 5) {
        echo 'Email не менее 5 символов';
        exit();
    }
    else if (mb_strlen($_POST['phone']) < 10) {
        echo 'Номер телефона не менее 10 символов';
        exit();
    }
    else if (isset($_POST['auto']) == false) {
        echo 'Вы не выбрали ни одного автомобиля';
        exit();
    }
    else if ($countFilms < 2) {
        echo 'Необходимо написать не менее 2 любимых фильма';
        exit();
    }
    ?>

    <div style="border: 1px solid; border-radius: 5px; width: 330px; margin-left: 40%; padding: 10px">
        <h1>Вся информация</h1>
        <hr>
        <?php
            print_r($_POST['name'] . '<br>' . $_POST['email'] . '<br>' . $_POST['phone']);
        ?>
        <p><b>fav_cars:</b></p>
            <ul>
            <?php
                foreach($_POST['auto'] as $el) {
                    echo "<li>" . $el . "</li>";
                }
            ?>
            </ul>
        <p><b>fav_films:</b></p>
        <ul>
            <?php
                for($i = 0; $i < count($arrayFilms); $i++) {
                    echo "<li>" . $arrayFilms[$i] . "</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
