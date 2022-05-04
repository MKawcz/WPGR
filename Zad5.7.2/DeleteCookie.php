<?php
    if(!empty($_POST['cookie_to_delete']) && !empty($_POST['delete_cookie'])) {
        foreach ($_COOKIE as $key => $value) {
            if($key == $_POST['cookie_to_delete']) {
                setcookie($key, "", time() - 3600);
                echo "<p>Ciasteczko zostało usunięte.</p>";
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
    <title>Usuń Ciastka</title>
</head>
<body>
<form action="DeleteCookie.php" method="post">
    Wpisz nazwę ciasteczka do usunięcia: <input name="cookie_to_delete" type="text" placeholder="Nazwa ciastka..."> <br> <br>
    <input name="delete_cookie" type="submit" value="Usuń"> <br> <br>
</form>
</body>
</html>
