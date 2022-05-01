<?php
    session_start();
    $rightLogin = "miki123";
    $rightPassword = "elomelo320";

    if(isset($_POST['login']) && isset($_POST['password'])){
        if($_POST['login'] == $rightLogin && $_POST['password'] == $rightPassword) {
            $_SESSION['poprawne_dane'] = htmlspecialchars($_POST['login']);
            header('Location: Zad3.7.2.php');
        } else {
            echo "<h3 style='color: red'>Błędne dane!</h3>";
            echo "<a href='logoutZad3.7.2.php'>Powrót do logowania</a>";
        }
    }