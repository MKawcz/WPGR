<?php
    if(!empty($_POST['wielokaty'])) {
        $image = imagecreatetruecolor(300, 300);
        $color = imagecolorallocate($image, $_POST['kolor_czerwony'] , $_POST['kolor_zielony'] , $_POST['kolor_niebieski']);
        if($_POST['wielokaty'] == "wielokat1"){
            $points = array(0,0,100,200,300,200);
            imagepolygon($image, $points, 3,$color);
        } elseif ($_POST['wielokaty'] == "wielokat2"){
            $points = array(150,50,50,250,250,250);
            imagepolygon($image, $points, 3,$color);
        } elseif ($_POST['wielokaty'] == "wielokat3"){
            $points = array(150,50,55,119,91,231,209,231,245,119);
            imagefilledpolygon($image, $points, 5,$color);
        }

        header("Content-Type: image/jpeg");
        imagejpeg($image);
    }  else {
        echo "<p style='color: red'>Proszę uzupełnić pole</p>";
    }
