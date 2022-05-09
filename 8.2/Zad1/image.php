<?php
if(isset($_POST['red']) && isset($_POST['green']) && isset($_POST['blue'])) {
        $image = imagecreatetruecolor(255, 255);
        $color = imagecolorallocate($image, $_POST['red'] , $_POST['green'] , $_POST['blue']);
        imageellipse($image, 128,128,70,70, $color);
        header("Content-Type: image/jpeg");
        imagejpeg($image);
}

?>