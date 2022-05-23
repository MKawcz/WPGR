<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Move</title>
</head>
<body>
<form method="post" action="Zad2.php">
    <p>Wybierz rodzaj poruszania się:</p>
    <select name="rodzaj">
        <option value="gora">góra</option>
        <option value="dol">dół</option>
        <option value="lewo">lewo</option>
        <option value="prawo">prawo</option>
    </select>
    <p>Podaj liczbę pikseli do przesunięcia:</p>
    <p><input type="number" name="piksele"></p>
    <p><input type="submit" name="sub"></p>
</form>

<?php
    if(isset($_POST['sub'])) {
        if (!empty($_POST['rodzaj']) && (!empty($_POST['piksele']) || $_POST['piksele'] == 0)) {
            $_SESSION['rodzaj'] = $_POST['rodzaj'];
            $_SESSION['piksele'] = $_POST['piksele'];
            echo "<img src='okrag.php' alt='okrag'>";
        } else {
            echo "<p style='color: red'>Proszę uzupełnić pole</p>";
        }
    }
?>
</body>
</html>