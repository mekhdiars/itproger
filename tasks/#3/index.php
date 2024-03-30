<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task db</title>
</head>
<body style="background-color: black; color: white;">
    <div style="font-size: 18px; border: 1px solid; border-radius: 5px; padding: 10px; margin: 0 30% 0 30%;">
        <h1>Все заказы</h1>
        <?php
            $user = 'root';
            $pass = '';
            $db = 'test';
            $host = '127.0.0.1';
            $port = '3306';
            
            $dsn = "mysql:host=$host;dbname=$db;port=$port";
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->exec("SET NAMES utf8");

            $stmtUser = $pdo->prepare("SELECT id FROM users WHERE login = :login");
            $stmtUser->execute([':login' => 'john']);
            $stmtItem = $pdo->prepare("SELECT id FROM items WHERE category = :category");
            $stmtItem->execute([':category' => 'hats']);

            $userId = $stmtUser->fetch(PDO::FETCH_OBJ);
            $itemArray = $stmtItem->fetchAll(PDO::FETCH_OBJ);
            $itemIdOne = $itemArray[0]->id;
            $itemIdTwo = $itemArray[1]->id;

            $pdo->exec("INSERT IGNORE INTO orders (id, user_id, item_id) VALUES (1, $userId->id, $itemIdOne), (2, $userId->id, $itemIdTwo)");

            $stmtOrders = $pdo->query("SELECT users.login, items.title FROM orders JOIN users ON orders.user_id = users.id
                JOIN items ON orders.item_id = items.id");
            $orders = $stmtOrders->fetchAll(PDO::FETCH_OBJ);

            $john = $orders[0]->login;
            $redCap = $orders[0]->title;
            $blueCap = $orders[1]->title;
        ?>
        <span><b><?php echo $john ?></b> - <u><?php echo $redCap ?></u></span><br>
        <span><b><?php echo $john ?></b> - <u><?php echo $blueCap ?></u></span>
    </div>
</body>
</html>