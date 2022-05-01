<?php
$code = [
    '<input type="submit" name="submit" value="Prześlij">',
    '<p>Dziękujemy za udzielenie odpowiedzi.</p>',
    '<p>Odpowiedziałeś już na tę ankietę.</p>'
];

if (!isset($_COOKIE['odpowiedz'])) {
    setcookie('odpowiedz', 1, time() + 3600);
    $index = 0;
} elseif ($_COOKIE['odpowiedz'] == 1) {
    setcookie('odpowiedz', 2, time() + 3600);
    $index = 1;
} else {
    $index = 2;
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Ankieta</title>

</head>
<body>
<form method="post" action="Zad2.7.2.php">
    <label for="ankieta">Kto stworzył Linuxa?</label>
    <select id="ankieta" name="ankieta">
        <option value="Elon">Elon Musk</option>
        <option value="Mareczek">Mark Zuckerberg</option>
        <option value="Linus">Linus Torvalds</option>
        <option value="Bill">Bill Gates</option>
    </select>
    <?php echo $code[$index]; ?>
</form>
</body>