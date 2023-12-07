<?php
    session_start();
    $login = 'admin';

    // использую функцию  password_hash()  для хеширования пароля
    $password = '$2y$10$Yd1VDHiqeMWbDzKMCzXryOg5bapRd6g0cuLEyAuNjR6yCJCevQgE.';
  

    if (!empty($_POST)) {
        if ($_POST['login'] == $login && password_verify($_POST['password'], $password)) {
            $_SESSION['auth'] = 1;
            $_SESSION['res'] = 'Вы авторизовались!';
            header("Location: secret.php");
            exit();

        } else {
           $_SESSION['error'] = 'Неверный логин или пароль!';
           header("Location: index.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <ul>
        <li><a href="secret.php">Secret page</a></li>
    </ul>
    <h2>Необходимо авторизоваться!</h2>
    <form method="POST">
        <p>Login: <input type="text" name="login"/p>
        <p>Password: <input type="password" name="password"></p>
        <button type="submit" name="submit">Login</button>
    </form>


    <?php
    
    // Вывод текста при удачной/не удачной авторизации 
    if (isset($_SESSION['res'])) {
        echo  $_SESSION['res'];
        unset($_SESSION['res']);
    } else if (isset($_SESSION['error'])) {
        echo  $_SESSION['error'];
        unset($_SESSION['error']);
    }
?>

</body>
</html>