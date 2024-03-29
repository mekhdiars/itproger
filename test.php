<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
</body>
</html>
<body>
    <?php
        if($messages != false) {
            foreach($messages as $el) {
                if ($el->name === $_COOKIE['log'])
                    echo '<p class="my_mess">' . $el->mess . '<span class="name">Вы</span></p><br>';
                else
                    echo '<p class="mess">' . $el->mess . '<span class="name">' . $el->name . '</span></p><br>';
            }
        } else {
            echo '<p class="empty_chat">Чат пока пустой</p>';
        }
    ?>
</body>