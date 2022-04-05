<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body style="background-color: black">
<h1 style="color: white">Kalkulator</h1>
<hr>
<h2 style="color: white">Prosty</h2>
<form action="doZad8.5.2.php" method="post">
    <input type="number" name="a">
    <select name="obliczenia">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="mnozenie">Mnożenie</option>
        <option value="dzielenie">Dzielenie</option>
    </select>
    <input type="number" name="b">
    <br>
    <br>
    <input type="submit" value="Oblicz" name="oblicz">

<hr>
<h2 style="color: white">Zaawansowany</h2>

    <input type="text" name="c">
    <select name="obliczenia2">
        <option value="cosinus">Cosinus</option>
        <option value="sinus">Sinus</option>
        <option value="tangens">Tangens</option>
        <option value="bNd">Binarne na dziesiętne</option>
        <option value="dNb">Dziesiętne na binarne</option>
        <option value="dNs">Dziesiętne na szesnastkowe</option>
        <option value="sNd">Szesnastkowe na dziesięnte</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Oblicz" name="oblicz2">
</form>
</body>
</html>