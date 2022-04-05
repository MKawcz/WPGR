<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body style="align-content: center">

    <div style="text-align: center; border-color: blue; border-width: 2px; border-style: solid; border-radius: 5px; margin-left: 30%; margin-right: 30%; padding-bottom: 10px;">
        <h3><b>OBLICZANIE DATY WIELKANOCY</b></h3>
        <form action="Zad9.5.2.php" method="post">
            PODAJ ROK  <input type="number" name="rok"> <input type="submit" style="border-radius: 20px" value="OBLICZ">
        </form>

        <?php
        if(isset($_POST['rok'])) {
            $r = $_POST['rok'];
            if ($r >= 1 && $r <= 1582) {
                $x = 15;
                $y = 6;
            } else if ($r >= 1583 && $r <= 1699) {
                $x = 22;
                $y = 2;
            } else if ($r >= 1700 && $r <= 1799) {
                $x = 23;
                $y = 3;
            } else if ($r >= 1800 && $r <= 1899) {
                $x = 23;
                $y = 4;
            } else if ($r >= 1900 && $r <= 2099) {
                $x = 24;
                $y = 5;
            } else if ($r >= 2100 && $r <= 2199) {
                $x = 24;
                $y = 6;
            } else {
                echo "<p>Nieprawidłowy rok</p>";
                exit();
            }

            $a = $r % 19;
            $b = $r % 4;
            $c = $r % 7;
            $d = (19 * $a + $x) % 30;
            $f = (2 * $b + 4 * $c + 6 * $d + $y) % 7;

            if($f == 6 && $d == 29) {
                echo "<p>WIELKANOC WYPADA 26 KWIETNIA</p>";
            } else if($f == 6 && $d == 28 && ((11 * $x + 11) % 30 < 19)) {
                echo "<p>WIELKANOC WYPADA 18 KWIETNIA</p>";
            } else if (($d + $f) < 10) {
                echo "<p>WIELKANOC WYPADA " . (22 + $d + $f) . " MARCA";
            } else if (($d + $f) > 9 ) {
                echo "<p>WIELKANOC WYPADA " . ($d + $f - 9) . " KWIETNIA";
            }
        }
        ?>

    </div>

</body>
</html>