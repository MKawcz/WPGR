<?php
    session_start();
    include "Zad1.php";
    $movement = $_SESSION['rodzaj'];
    if(empty($_SESSION['x']) && empty($_SESSION['y'])) {
        $point = new MovablePoint(0, 0, $_SESSION['piksele'], $_SESSION['piksele']);
    } else {
        $point = new MovablePoint($_SESSION['x'], $_SESSION['y'], $_SESSION['piksele'], $_SESSION['piksele']);
    }
        if ($movement == "gora") {
            $point->moveDown();
        } elseif ($movement == "dol") {
            $point->moveUp();
        } elseif ($movement == "lewo") {
            $point->moveLeft();
        } elseif ($movement == "prawo") {
            $point->moveRight();
        }
    $_SESSION['x'] = $point-> getX();
    $_SESSION['y'] = $point-> getY();
    $image = imagecreatetruecolor(255, 255);
    $color = imagecolorallocate($image, 255, 0, 101);
    imagefilledellipse($image, $_SESSION['x'], $_SESSION['y'], 40, 40, $color);
    header("Content-Type: image/jpeg");
    imagejpeg($image);

?>