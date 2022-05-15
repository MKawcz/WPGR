<?php
$imgDir = "images";
$dir = scandir($imgDir);
foreach($dir as $key => $val){
    if(!is_file("$imgDir/$val") || (exif_imagetype("$imgDir/$val") != IMAGETYPE_JPEG && exif_imagetype("$imgDir/$val") != IMAGETYPE_PNG && exif_imagetype("$imgDir/$val") != IMAGETYPE_BMP) || filesize("$imgDir/$val") > 2000000){
        unset($dir[$key]);
    }
}
sort($dir);

    if(!empty($_POST['filename']) && !empty($_POST['new_width']) && !empty($_POST['new_high'])) {
        $filename = $_POST['filename'];
        foreach ($dir as $i)
        {
            if($i == $filename){
                $image = imagecreatefromjpeg('images/' . $i);
                imagescale($image, $_POST['new_width'], $_POST['new_high']);
                header("Content-Type: image/jpeg");
                imagejpeg($image);
                exit();
            }
        }
        echo "<p style='text-align: center; color: red'>Brak obrazu o podanej nazwie</p>";
    }
?>