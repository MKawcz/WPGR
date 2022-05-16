<?php
if(isset($_POST['wyslij'])) {
    if (!empty($_POST['czcionki']) && !empty($_POST['tekst']) && (!empty($_POST['x']) || $_POST['x'] == 0) && (!empty($_POST['y']) || $_POST['y'] == 0)) {
        $image = imagecreate(350, 70);
        $white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
        $black = imagecolorallocate($image, 0x00, 0x00, 0x00);
        $tekst = $_POST['tekst'];
        $x = $_POST['x'];
        $y = $_POST['y'];
        if ($_POST['czcionki'] == '1') {
            imagestring($image, 1, $x, $y, $tekst, $black);
        } elseif ($_POST['czcionki'] == '2') {
            imagestring($image, 2, $x, $y, $tekst, $black);
        } elseif ($_POST['czcionki'] == '3') {
            imagestring($image, 3, $x, $y, $tekst, $black);
        } elseif ($_POST['czcionki'] == '4') {
            imagestring($image, 4, $x, $y, $tekst, $black);
        } elseif ($_POST['czcionki'] == '5') {
            imagestring($image, 5, $x, $y, $tekst, $black);
        } elseif ($_POST['czcionki'] == 'IndieFlower') {
            $fontname = "IndieFlower-Regular.ttf";
            imagettftext($image, 20, 0, $x, $y, $black, $fontname, $tekst);
        }
        header("Content-Type: image/png");
        imagepng($image);
    } else {
        echo "<p style='color: red'>Proszę uzupełnić wszystkie pola</p>";
    }
}
?>