<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Figury</title>
</head>
<body>
<form method="post" action="Figury.php">
    <p style="color: red">Czerwony: <input type="number" name="red" min="0" max="255"></p>
    <p style="color: green">Zielony: <input type="number" name="green" min="0" max="255"></p>
    <p style="color: blue">Niebieski: <input type="number" name="blue" min="0" max="255"></p>
    <p>Wybierz figurę: </p>
    <p>Okrąg <input type="radio" name="figury" value="okrag"></p>
    <p>Linia <input type="radio" name="figury" value="linia"></p>
    <p>Prostokąt <input type="radio" name="figury" value="prostokat"></p>
    <p>Wielokąt <input type="radio" name="figury" value="wielokat"></p>
    <input type="submit" name="sub">
</form>
<br>
</body>
</html>