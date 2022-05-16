<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Czcionki</title>
</head>
<body>
<form method="post" action="Czcionki.php">
    <p>Wybierz rodzaj czcionki:</p>
    <select name='czcionki'>
        <option value='1'>Czcionka 1</option>
        <option value='2'>Czcionka 2</option>
        <option value='3'>Czcionka 3</option>
        <option value='4'>Czcionka 4</option>
        <option value='5'>Czcionka 5</option>
        <option value='IndieFlower'>IndieFlower</option>
    </select>
    <p>Wpisz tekst do wyświetlenia: </p>
    <p><input type="text" name="tekst"></p>
    <p>Podaj punkty początkowe umiejscowienia tekstu:</p>
    <p>x: <input type="text" name="x">  y: <input type="text" name="y"></p>
    <p><input type="submit" name="wyslij"></p>
</form>
</body>
</html>