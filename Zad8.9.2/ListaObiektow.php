<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Lista samochodów</title>
    <style>
        table, td {
            border: 1px solid;

        }
    </style>
</head>
<body>
<?php
    echo "<h2>Lista samochodów:</h2>";
    echo "<table>";
    echo "<form action='ListaObiektow.php' method='post'>";
    foreach ($_COOKIE as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td><td><a href='#'>Oblicz cenę</a></td><td><input type='submit' value='Szczegółowe dane' name='dane'></td><td><a href='#'>Edycja danych</a></td><td><a href='#'>Usuń samochód</a></td>";
        echo "</tr>";
    }
    echo "</form>";
    echo "<table>";

?>
</body>
</html>