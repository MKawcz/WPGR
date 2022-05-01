<?php
    session_start();

    unset($_SESSION['poprawne_dane']);

    session_destroy();

    header('Location: Zad3.7.2.php');