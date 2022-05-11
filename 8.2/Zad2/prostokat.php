<?php
if((!empty($_POST['poczatekX']) || $_POST['poczatekX'] == 0) && (!empty($_POST['poczatekY']) || $_POST['poczatekY'] == 0) && (!empty($_POST['koniecX']) || $_POST['koniecX'] == 0) && (!empty($_POST['koniecY']) || $_POST['koniecY'] == 0)) {
    $image = imagecreatetruecolor(200, 200);
    $color = imagecolorallocate($image, $_POST['kolor_czerwony'] , $_POST['kolor_zielony'] , $_POST['kolor_niebieski']);
    imagefilledrectangle($image, intval($_POST['poczatekX']), intval($_POST['poczatekY']), intval($_POST['koniecX']), intval($_POST['koniecY']), $color);
    header("Content-Type: image/jpeg");
    imagejpeg($image);
} else {
    echo "<p style='color: red'>Proszę uzupełnić wszystkie pola</p>";
}