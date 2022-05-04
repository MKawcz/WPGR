<?php
    if(!empty($_POST['add_new_cookie'])){
        if (!empty($_POST['new_cookie_name']) && !empty($_POST['new_cookie_value'])) {
            setcookie($_POST['new_cookie_name'], $_POST['new_cookie_value']);
        } elseif (!empty($_POST['new_cookie_name']) && !empty($_POST['new_cookie_value']) && !empty($_POST['new_cookie_expired'])) {
            $data = strtotime($_POST['new_cookie_expired']);
            setcookie($_POST['new_cookie_name'], $_POST['new_cookie_value'], $data);
        } else {
            echo "<p style='color: red'>Brak danych dla nowego ciasteczka</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Ciastka</title>
</head>
<body>
    <form action="Zad5.7.2.php" method="post">
        <h3>Dodaj nowe ciasteczko:</h3>
        Nazwa: <input type="text" name="new_cookie_name"> <br> <br>
        Wartość: <input type="text" name="new_cookie_value"> <br> <br>
        Data wygaśnięcia (opcjonalnie): <input type="datetime-local" name="new_cookie_expired"> <br> <br>
        <input type="submit" name="add_new_cookie" value="Dodaj ciasteczko">
    </form>
    <br>
    <br>
    <hr>
    <br>
    <form action="Zad5.7.2.php" method="post">
        <input type="submit" name="display_all_cookies" value="Wyświetl wszystkie ciasteczka"> <br>
    </form>
    <?php
    if(!empty($_POST['display_all_cookies'])){
        foreach ($_COOKIE as $key => $value) {
            echo "<p>nazwa: " . $key . ", wartość: " . $value . "</p>";
        }
    }
    ?>
    <br>
    <hr>
    <br>
    <a href="EditCookie.php" target="_blank">EDYTUJ CIASTECZKO</a>
    <br> <br>
    <hr>
    <br>
    <a href="DeleteCookie.php" target="_blank">USUŃ CIASTECZKO</a>
    <br> <br>
    <hr>
    <form action="Zad5.7.2.php" method="post">
        <h3>Podaj nazwę lub wartość ciasteczka:</h3>
        <input name="search_bar" type="text" placeholder="Wyszukaj ciasteczko...">
        <input name="search" type="submit" value="Szukaj">
    </form>
    <?php
        if(!empty($_POST['search'])) {
            if (!empty($_POST['search_bar'])) {
                foreach ($_COOKIE as $key => $value) {
                    if ($key == $_POST['search_bar'] || $value == $_POST['search_bar']) {
                        echo "<p>nazwa: " . $key . ", wartość: " . $value . "</p>";
                        exit();
                    }
                }
                echo "<p style='color: red'>Nie istnieje ciasteczko o podanej nazwie lub wartości</p>";
            }
        }
    ?>
</body>
</html>