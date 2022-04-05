<?php
    if(!is_numeric($_POST['a']) || !is_numeric($_POST['b'])) {
        echo "Brak działania dla kalkulatora podstawowego";
    } else {
        if ($_POST['obliczenia'] == "dodawanie") {
            $a = $_POST['a'] + $_POST['b'];
            echo "Wynik działania " . $_POST['a'] . " + " . $_POST['b'] . " = " . $a;
        } else if ($_POST['obliczenia'] == "odejmowanie") {
            $a = $_POST['a'] - $_POST['b'];
            echo "Wynik działania " . $_POST['a'] . " - " . $_POST['b'] . " = " . $a;
        } else if ($_POST['obliczenia'] == "mnozenie") {
            $a = $_POST['a'] * $_POST['b'];
            echo "Wynik działania " . $_POST['a'] . " * " . $_POST['b'] . " = " . $a;
        } else if ($_POST['obliczenia'] == "dzielenie") {
            $a = $_POST['a'] / $_POST['b'];
            echo "Wynik działania " . $_POST['a'] . " / " . $_POST['b'] . " = " . $a;
        } else if(!is_numeric($_POST['a']) || !is_numeric($_POST['b'])) {
            echo "Błędnie podana liczba";
        }
    }

    echo "<br>";

     if (isset($_POST['c'])){
        if ($_POST['obliczenia2'] == "cosinus" && is_numeric($_POST['c'])) {
            $a = cos($_POST['c']);
            echo "Wynik działania Cosinus z " . $_POST['c'] . " = " . $a;
        } else if ($_POST['obliczenia2'] == "sinus" && is_numeric($_POST['c'])) {
            $a = sin($_POST['c']);
            echo "Wynik działania Siuns z  " . $_POST['c'] . " = " . $a;
        } else if ($_POST['obliczenia2'] == "tangens" && is_numeric($_POST['c'])) {
            $a = tan($_POST['c']);
            echo "Wynik działania Tangens z " . $_POST['c'] .  " = " . $a;
        } else if ($_POST['obliczenia2'] == "bNd") {
            if (preg_match('/^[01]+$/', $_POST['c']) && is_numeric($_POST['c'])) {
                $a = bindec($_POST['c']);
                echo "Liczba binarna: " . $_POST['c'] . " to " . $a . " w systemie dziesiętnym";
            } else {
                echo "Podana liczba nie jest liczbą binarną";
            }
        } else if ($_POST['obliczenia2'] == "dNb" && is_numeric($_POST['c'])) {
            if(preg_match('/^0+/', $_POST['c'])) {
                echo "Podana liczba nie jest liczbą dziesiętną";
            } else {
                $a = decbin($_POST['c']);
                echo "Liczba dziesiętna: " . $_POST['c'] . " to " . $a . " w systemie binarnym";
            }
        } else if ($_POST['obliczenia2'] == "dNs" && is_numeric($_POST['c'])) {
            if(preg_match('/^0+/', $_POST['c'])) {
                echo "Podana liczba nie jest liczbą dziesiętną";
            } else {
                $a = dechex($_POST['c']);
                echo "Liczba dziesiętna: " . $_POST['c'] . " to " . $a . " w systemie szesnastkowym";
            }
        } else if ($_POST['obliczenia2'] == "sNd") {
            if(ctype_xdigit($_POST['c'])) {
                $a = hexdec($_POST['c']);
                echo "Liczba szesnastkowa: " . $_POST['c'] . " to " . $a . " w systemie dziesiętnym";
            } else {
                echo "Podana liczba nie jest liczbą szesnastkową";
            }
        }
    } else if(!is_numeric($_POST['c'])){
         echo "Brak działania dla kalkulatora zaawansowanego";
     }


?>
