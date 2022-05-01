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
    <h1>Zaloguj się:</h1> <br>
    <form action="LoginZad4.7.2.php" method="post">
        Email: <input type="text" name="mail"> <br> <br>
        Hasło: <input type="password" name="pass"> <br> <br>
        <input type="submit" value="Zaloguj"> <br>
    </form>
<?php } else { ?>
    <h1>Witaj <?=$_SESSION['poprawne_dane'] ?>!</h1>
    <a href="LogoutZad4.7.2.php">Wyloguj się</a>
<?php } ?>
    <br>
    <a href="RegisterZad4.7.2.php">Powrót do rejestracji</a>
</body>
</html>