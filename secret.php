<?php
    session_start();
    if (isset($_GET['do']) && $_GET['do'] == 'logout') {
        unset($_SESSION['auth']);
        $_SESSION['res'] = 'Вы вышли';
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Secret</title>
</head>
<body>
<ul>
        <li><a href="index.php">Index page</a></li>
    </ul>
    <?php if(!empty($_SESSION['auth'])): ?>
    <h2>Добро пожаловать на страницу!</h2>
  
    <?php else: ?>
    <h2>Вы не авторизованы!</h2>
    <?php endif; ?>

    <button>
        <a href="?do=logout">Logout</a>
    </button>
  
</body>
</html> 