<?php
    session_start();
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

</body>
</html>