<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <?php if(empty($_SESSION['poprawne_dane'])) { ?>
        <form action="loginZad3.7.2.php" method="post">
            Login: <input type="text" name="login"> <br> <br>
            Hasło: <input type="password" name="password"> <br> <br>
            <input type="submit" value="Zaloguj"> <br>
        </form>
    <?php } else { ?>
        <h1>Witaj <?=$_SESSION['poprawne_dane'] ?>!</h1>
        <a href="logoutZad3.7.2.php">Wyloguj się</a>
    <?php } ?>
</body>
</html>