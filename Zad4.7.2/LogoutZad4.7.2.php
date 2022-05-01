<?php
    session_start();

    unset($_SESSION['poprawne_dane']);

    session_destroy();

    header('Location: LogowanieZad4.7.2.php');