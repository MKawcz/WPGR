<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Samochody</title>
</head>
<body>
    <h2>Wybierz usługę:</h2>
    <form action="Formularz.php" method="post">
        <select name="chooseService">
            <option value="Car">Samochód</option>
            <option value="NewCar">Nowy samochód</option>
            <option value="InsuranceCar">Ubezpieczenie samochodu</option>
        </select>
        <p><input type='submit' name="usluga"></p>
    </form>

    <?php
        if(isset($_POST['usluga'])) {
            if (isset($_POST['chooseService'])) {
                if ($_POST['chooseService'] == "Car") {
                    echo "<form action='Zad7.9.2.php' method='post'>";
                    echo "<input type='hidden' name='Service' value=\"Car\">";
                    echo "<p>Podaj model: <input type='text' name='model'></p>";
                    echo "<p>Podaj cenę (&#8364): <input type='number' name='cena'></p>";
                    echo "<p>Podaj kurs: <input type='text' name='kurs'></p>";
                    echo "<p><input type='submit'></p>";
                    echo "</form>";
                } elseif ($_POST['chooseService'] == "NewCar") {
                    echo "<form action='Zad7.9.2.php' method='post'>";
                    echo "<input type='hidden' name='Service' value=\"NewCar\">";
                    echo "<p>Podaj model: <input type='text' name='model'></p>";
                    echo "<p>Podaj cenę (&#8364): <input type='number' name='cena'></p>";
                    echo "<p>Podaj kurs: <input type='text' name='kurs'></p>";
                    echo "<p>Alarm: <select name='alarm'>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Radio: <select name='radio'></p>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Klimatyzacja: <select name='klimatyzacja'></p>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p><input type='submit'></p>";
                    echo "</form>";
                } elseif ($_POST['chooseService'] == "InsuranceCar") {
                    echo "<form action='Zad7.9.2.php' method='post'>";
                    echo "<input type='hidden' name='Service' value=\"InsuranceCar\">";
                    echo "<p>Podaj model: <input type='text' name='model'></p>";
                    echo "<p>Podaj cenę (&#8364): <input type='number' name='cena'></p>";
                    echo "<p>Podaj kurs: <input type='text' name='kurs'></p>";
                    echo "<p>Alarm: <select name='alarm'>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Radio: <select name='radio'></p>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Klimatyzacja: <select name='klimatyzacja'></p>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Pierwszy właściciel?: <select name='pierwszyWlasciciel'></p>" .
                        "<option value='1'>Tak</option>" .
                        "<option value='0'>Nie</option>" .
                        "</select></p>";
                    echo "<p>Ile lat?: <input type='number' name='lata'></p>";
                    echo "<p><input type='submit'></p>";
                    echo "</form>";
                }
            } else {
                echo "<p style='color: red'>Proszę wybrać opcję</p>";
            }
        }
    ?>
</body>
</html>