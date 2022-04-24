<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki</title>
</head>
<body>
<form action="Zad5.6.4.php" method="post">
    Podaj nazwę pliku: <input type="text" name="sciezka">
    <input type="submit">
</form>
<?php
    $path = $_POST['sciezka'];

    function convert($size,$unit)
    {
        if($unit == "KB")
        {
            return $fileSize = round($size / 1024,4) . 'KB';
        }
        if($unit == "MB")
        {
            return $fileSize = round($size / 1024 / 1024,4) . 'MB';
        }
        if($unit == "GB")
        {
            return $fileSize = round($size / 1024 / 1024 / 1024,4) . 'GB';
        }
    }

    if(isset($path)) {
        if(file_exists($path)){
            if(is_dir($path)){
                $arr = scandir("$path");
                foreach ($arr as $file){
                    $realfile = $path . "/" . $file;
                    if($file != '.' && $file != '..')
                        echo "$file waży " . filesize($realfile) . "B / " . convert(filesize($realfile), "MB") . " / "
                    . convert(filesize($realfile), "GB") ."<br>";
                }
            } elseif (is_file($path)){
                echo $path . " waży " . filesize($path)  . "B / " . convert(filesize($path), "MB") . " / "
                    . convert(filesize($path), "GB");
            }
        } else {
            echo "Brak pliku/katalogu o podanej nazwie";
        }
    } else {
        echo "Nie podano pliku";
    }
?>
</body>
</html>
