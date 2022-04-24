<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Opinie</title>
</head>
<body>
<form action="Zad7.6.4.php" method="post">
    <b>Wyraź swoją opinię:</b> <br>
    (maksymalnie 255 znaków) <br>
    <textarea name="opinia"> </textarea> <br>
    <input type="submit">
    <input type="submit" name="reset" value="Resetuj">
</form>

<p>Dotychczasowe opinie: <br>

    <?php
        $licznik = 0;

        if (isset($_POST['reset'])) {
            file_put_contents('opinia.txt', $_POST['opinia'] . "\n", FILE_APPEND);
            unlink("opinia.txt");
            echo "Brak opinii. Możesz dodać pierwszą.";
        } elseif(isset($_POST['opinia'])) {
                file_put_contents('opinia.txt', $_POST['opinia'] . "\n", FILE_APPEND);

                if (!$fd = fopen('opinia.txt', 'r')){
                    echo "Nie można otworzyć pliku opinia.txt";
                } else {
                    while(!feof($fd)){
                        $str = fgets($fd);
                        $licznik++;
                    }
                    fclose($fd);
                    $licznik = $licznik-1;
                    if($licznik!=0) {
                        echo "Liczba opinii: " . $licznik;
                    }
                }
            } else{
                echo "Brak opinii. Możesz dodać pierwszą.";
        }
    ?>
</p>

<p>
    <?php
        function toLocaleDateString($s) {
            if (date("l, j F Y, h:i:s a O", $s) == date("l, j F Y, h:i:s a O", time())) {
                $date = date("l, j F Y, h:i:s a O", $s);
            } else {
                $date = date("l, j F Y, h:i:s a O", $s);
            }

            $date = str_replace('Monday', 'Poniedziałek', $date);
            $date = str_replace('Tuesday', 'Wtorek', $date);
            $date = str_replace('Wednesday', 'Środa', $date);
            $date = str_replace('Thursday', 'Czwartek', $date);
            $date = str_replace('Friday', 'Piątek', $date);
            $date = str_replace('Saturday', 'Sobota', $date);
            $date = str_replace('Sunday', 'Niedziela', $date);

            $date = str_replace('January', 'Stycznia', $date);
            $date = str_replace('February', 'Lutego', $date);
            $date = str_replace('March', 'Marca', $date);
            $date = str_replace('April', 'Kwietnia', $date);
            $date = str_replace('May', 'Maja', $date);
            $date = str_replace('June', 'Czerwca', $date);
            $date = str_replace('July', 'Lipca', $date);
            $date = str_replace('August', 'Sierpnia', $date);
            $date = str_replace('September', 'Września', $date);
            $date = str_replace('October', 'Października', $date);
            $date = str_replace('November', 'Listopada', $date);
            $date = str_replace('December', 'Grudnia', $date);

            return $date;
        }

        echo "<br>";
        echo "<br>";
        echo  "Dziś jest " . toLocaleDateString(time()) . " GMT.<br>";
        $dzis = time();
        $nowy_rok = mktime(0,0,0,1,1,(date('Y')+1));
        $ile_dni = floor(abs(($dzis - $nowy_rok) / 86400));
        echo "Do końca roku pozostało " . $ile_dni . " dni.";
    ?>
</p>
</body>
</html>
