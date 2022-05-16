<?php
    if(isset($_POST['promien'])) {
        $image = imagecreatetruecolor(255, 255);
        $color = imagecolorallocate($image, $_POST['kolor_czerwony'] , $_POST['kolor_zielony'] , $_POST['kolor_niebieski']);
        imagefilledellipse($image, 128,128, intval($_POST['promien']), intval($_POST['promien']), $color);
        header("Content-Type: image/jpeg");
        imagejpeg($image);
    } else {
        echo "<p style='color: red'>Proszę uzupełnić pole</p>";
    }