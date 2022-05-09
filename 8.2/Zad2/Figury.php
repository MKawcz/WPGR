<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Figury</title>
</head>
<body>
    <?php
        if(isset($_POST['red']) && isset($_POST['green']) && isset($_POST['blue']) && isset($_POST['figury'])) {
            $red = $_POST['red'];
            $green = $_POST['green'];
            $blue = $_POST['blue'];
            if($_POST['figury'] == "okrag") {
                echo "<form action='okrag.php' method='post'>";
                echo "<p>Podaj promień: <input type='number' name='promien'></p>";
                echo "<input type='hidden' name='kolor_czerwony' value=\"$red\">";
                echo "<input type='hidden' name='kolor_zielony' value=\"$green\">";
                echo "<input type='hidden' name='kolor_niebieski' value=\"$blue\">";;
                echo "<p><input type='submit'></p>";
                echo "</form>";
            } elseif ($_POST['figury'] == "linia") {
                echo "<form action='linia.php' method='post'>";
                echo "<p>Podaj punkt początkowy (x): <input type='number' name='poczatekX'></p>";
                echo "<p>Podaj punkt początkowy (y) : <input type='number' name='poczatekY'></p>";
                echo "<p>Podaj punkt końcowy (x) : <input type='number' name='koniecX'></p>";
                echo "<p>Podaj punkt końcowy (y) : <input type='number' name='koniecY'></p>";
                echo "<input type='hidden' name='kolor_czerwony' value=\"$red\">";
                echo "<input type='hidden' name='kolor_zielony' value=\"$green\">";
                echo "<input type='hidden' name='kolor_niebieski' value=\"$blue\">";
                echo "<p><input type='submit'></p>";
                echo "</form>";
            } elseif ($_POST['figury'] == "prostokat") {
                echo "<form action='prostokat.php' method='post'>";
                echo "<p>Podaj punkt początkowy (x): <input type='number' name='poczatekX'></p>";
                echo "<p>Podaj punkt początkowy (y) : <input type='number' name='poczatekY'></p>";
                echo "<p>Podaj punkt końcowy (x) : <input type='number' name='koniecX'></p>";
                echo "<p>Podaj punkt końcowy (y) : <input type='number' name='koniecY'></p>";
                echo "<input type='hidden' name='kolor_czerwony' value=\"$red\">";
                echo "<input type='hidden' name='kolor_zielony' value=\"$green\">";
                echo "<input type='hidden' name='kolor_niebieski' value=\"$blue\">";
                echo "<p><input type='submit'></p>";
                echo "</form>";
            } elseif ($_POST['figury'] == "wielokat") {
                echo "<form action='wielokat.php' method='post'>";
                echo "<p>Wybierz ułożenie punktów:</p>";
                echo "<select name='wielokaty'>
                      <option value='wielokat1'>(0,0); (100,200); (300, 200)</option> 
                      <option value='wielokat2'>(150,50); (50,250); (250, 250)</option> 
                      <option value='wielokat3'>(150,50); (55,119); (91, 231); (209, 231); (245, 119)</option>  
                      </select>";
                echo "<input type='hidden' name='kolor_czerwony' value=\"$red\">";
                echo "<input type='hidden' name='kolor_zielony' value=\"$green\">";
                echo "<input type='hidden' name='kolor_niebieski' value=\"$blue\">";
                echo "<p><input type='submit'></p>";
                echo "</form>";
            }
        }

    ?>
</body>
</html>