<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Galeria obrazów</title>
</head>
<body>
<?php
    $imgDir = "images";

    if(isset($_GET['imgid'])){
        $imgId = intval($_GET['imgid']);
    }
    else{
        $imgId = 0;
    }

    $dir = scandir($imgDir);
    foreach($dir as $key => $val){
        if(!is_file("$imgDir/$val") || (exif_imagetype("$imgDir/$val") != IMAGETYPE_JPEG && exif_imagetype("$imgDir/$val") != IMAGETYPE_PNG && exif_imagetype("$imgDir/$val") != IMAGETYPE_BMP) || filesize("$imgDir/$val") > 2000000){
            unset($dir[$key]);
        }
    }

    sort($dir);

    $count = count($dir);

    if($count < 1){
        echo "<p style=\"text-align:center\">Brak obrazów w galerii.</p>";
        echo "</body></html>";
        exit();
    }

    //sprawdzenie poprawności parametru
    if($imgId < 0 || $imgId >= $count || !is_Numeric($imgId)){
        $imgId = 0;
    }

    $imgName = $dir["$imgId"];
    $first = 0;
    $last = $count - 1;
    if($imgId < $count - 1){
        $next = $imgId + 1;
    }
    else{
        $next = $count - 1;
    }

    if($imgId > 0){
        $prev = $imgId - 1;
    }
    else{
        $prev = 0;
    }
?>
<div>
    <div id='obraz' style='text-align:center'>
        <?php
        echo "<img src=\"$imgDir\\$imgName\" alt=\"$imgName\" />";
        ?>
    </div>
    <div id='opis' style='text-align:center'>
        <?php
        $imgId++;
        echo "Obraz $imgName ($imgId z $count)";
        ?>
    </div>
    <div id='nawigacja' style='text-align:center'>
        <?php
        echo "<a href=\"Zad4.8.2.php?imgid=$first\">Pierwszy</a> ";
        echo "<a href=\"Zad4.8.2.php?imgid=$prev\">Poprzedni</a> ";
        echo "<a href=\"Zad4.8.2.php?imgid=$next\">Następny</a> ";
        echo "<a href=\"Zad4.8.2.php?imgid=$last\">Ostatni</a> ";
        ?>
    </div>
</div>
</body>
</html>
