<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dzień Tygodnia</title>
</head>
<body>
    <form action="Zad4.6.4.php" method="post">
        Podaj datę (yyyy-mm-dd): <input type="text" name="data">
        <input type="submit">
    </form>
    <?php

        $polWeekDays = array( 'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota' );
        function validateDate($date, $format = 'Y-m-d')
        {
            $d = DateTime::createFromFormat($format, $date);
            return $d && $d->format($format) === $date;
        }

        if(isset($_POST['data'])){
            if(validateDate($_POST['data'])){
                $date = strtotime($_POST['data']);
                $dayOfWeek = date("N", $date);;
                echo $_POST['data']. " to " . $polWeekDays[$dayOfWeek];
            } else {
                echo "Błędnie podana data";
            }
        } else {
            echo "Nie podano daty";
        }
    ?>
</body>
</html>