<?php
    if(isset($_POST['cookie_to_change']) && isset($_POST['changed_value']) && isset($_POST['change_cookie'])) {
        foreach ($_COOKIE as $key => $value) {
            if($key == $_POST['cookie_to_change']) {
                setcookie($key, $_POST['changed_value']);
                echo "<p>Ciasteczko po edycji:</p>";
                echo "<p>nazwa: " . $key . ", wartość: " . $_POST['changed_value'] . "</p>";
                exit();
            }
        }
        echo "<p style='color: red'>Nie istnieje ciasteczko o podanej nazwie</p>";
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Edytuj Ciastka</title>
</head>
<body>
    <form action="EditCookie.php" method="post">
        Wpisz nazwę ciasteczka do edycji: <input name="cookie_to_change" type="text" placeholder="Nazwa ciastka..."> <br> <br>
        Zmień jego wartość na: <input type="text" name="changed_value"><br> <br>
        <input name="change_cookie" type="submit" value="Zmień"> <br> <br>
    </form>
</body>
</html>
