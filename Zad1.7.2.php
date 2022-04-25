<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Licznik - ciastka</title>
</head>
<body>
    <form method="post" action="Zad1.7.2.php">
        <input type="submit" name="reset" value="Resetuj">
        <input type="submit" name="dodaj" value="Odśwież">
    </form>

    <?php
         if (!isset($_COOKIE['count']) || isset($_POST['reset'])) {
            echo "Jesteś pierwszym gościem strony!";
            $cookie = 1;
            setcookie("count", $cookie);
         } else {
             $cookie = ++$_COOKIE['count'];
             setcookie("count", $cookie);
             echo "Liczba odwiedzin strony: ".$_COOKIE['count'];
        }

        echo "</br>";

        if($cookie % 10 == 0) {
            echo "WOW, jesteś ". $_COOKIE['count'] . " gościem!";
        }
    ?>
</body>
</html>