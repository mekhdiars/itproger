<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Форма регистрации</h2>
    <form action="check.php" method="post">
        <input type="text" name="name" placeholder="John"><br><br>
        <input type="email" name="email" placeholder="example@some.ru"><br><br>
        <input type="tel" name="phone" placeholder="+780000000"><br><br>
        Выберите любимые автомобили<br>
        <select name="auto[]" multiple>
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
            <option value="Reno">Reno</option>
        </select><br><br>
        Введите любимые фильмы. Минимум 2 или более. Вводить через запятую<br>
        <input type="text" name="films" placeholder="Любимые фильмы"><br><br>
        <button class="submit" type="submit">Отправить</button><br><br>
    </form>
</body>
</html>