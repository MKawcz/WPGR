<?php
session_start();
error_reporting(E_CORE_WARNING);
if(isset($_POST['mail']) && isset($_POST['pass'])){

    if (!$fd = fopen('dane.txt', 'r')){
        echo "Nie można otworzyć pliku dane.txt";
    }
    else{
        while(!feof($fd)){
            $str = trim(fgets($fd), "\n");
            $data = explode(" ", $str);
            //var_dump($data);
            if($_POST['mail'] == $data[2] && $_POST['pass'] == $data[3]) {
                $_SESSION['poprawne_dane'] = $data[0];
                header('Location: LogowanieZad4.7.2.php');
            }
        }
        fclose($fd);
        echo "<h3 style='color: red'>Błędne dane!</h3>";
        echo "<a href='LogoutZad4.7.2.php'>Powrót do logowania</a>";
    }

}