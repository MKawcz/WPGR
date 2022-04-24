<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki</title>
</head>
<body>
<?php
    if (!$fd = fopen('licznik.txt', 'r')){
        echo "Nie można otworzyć pliku licznik.txt";
    }
    else{
        $visitors = file_get_contents('licznik.txt');
        $visitors = $visitors+1;

        file_put_contents('licznik.txt',$visitors);

        $content = file_get_contents('licznik.txt');
        echo $content;
    }
?>
</body>
</html>