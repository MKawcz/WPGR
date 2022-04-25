<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Licznik - ciastka</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['odpowiedz'])){
            echo "<form method='post' action='Zad2.7.2.php'>";
            echo "Kto stworzył Linuxa? <br>";
            echo "<select name='ankieta'>";
            echo "<option value='Elon'>Elon Musk</option>";
            echo "<option value='Mareczek'>Mark Zuckerberg</option>";
            echo "<option value='Linus'>Linus Torvalds</option>";
            echo "<option value='Bill'>Bill Gates</option>";
            echo "</select>";
            echo "<br><br>";
            echo "<input type='submit' name='przeslij'>";
            echo "<br>";
            echo "</form>";
            setcookie('odpowiedz', true);
        } else {
            echo "<form method='post' action='Zad2.7.2.php'>";
            echo "Kto stworzył Linuxa? <br>";
            echo "<select name='ankieta'>";
            echo "<option value='Elon'>Elon Musk</option>";
            echo "<option value='Mareczek'>Mark Zuckerberg</option>";
            echo "<option value='Linus'>Linus Torvalds</option>";
            echo "<option value='Bill'>Bill Gates</option>";
            echo "</select>";
            echo "</form>";
            echo "Odpowiedziałeś już na tą ankietę.";
        }
    ?>
</body>
</html>