<?php
if(isset($_POST['poczatekX']) && isset($_POST['poczatekY']) && isset($_POST['koniecX']) && isset($_POST['koniecY'])) {
    $image = imagecreatetruecolor(200, 200);
    $color = imagecolorallocate($image, $_POST['kolor_czerwony'] , $_POST['kolor_zielony'] , $_POST['kolor_niebieski']);
    imagerectangle($image, intval($_POST['poczatekX']), intval($_POST['poczatekY']), intval($_POST['koniecX']), intval($_POST['koniecY']), $color);
    header("Content-Type: image/jpeg");
    imagejpeg($image);
}