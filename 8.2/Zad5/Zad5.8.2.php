<?php
$filter = 'images/*.jpg,'
    . 'images/*.png,'
    . 'images/*.bmp';
$dir = array_filter(glob('{'.$filter.'}', GLOB_BRACE), 'is_file');

$page = $_GET['page'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Galeria Obrazów</title>
    <style>
        .gallery img[src=""] {
            /* Hide image if src is empty - https://stackoverflow.com/questions/15922344/hide-image-if-src-is-empty */
            display: none;
        }
    </style>
</head>
<body>
<div class="container" style="margin: 0 auto; width: 1000px">
    <?php if (count($dir) < 1){ ?>
        <p class="no-images" style="text-align: center; color: red">Brak obrazów w galerii.</p>
    <?php } elseif (isset($_GET['imgid'])){
        if (isset($dir[$_GET['imgid']])){ ?>
            <p class="show-image" style="text-align: center">
                <img src="<?php echo $dir[$_GET['imgid']]; ?>"
                     alt="<?php echo basename($dir[$_GET['imgid']]); ?>" />
            </p>
            <p style="text-align: center"> <?php echo "Obraz " . $dir[$_GET['imgid']]; ?> </p>
            <p style="text-align: center"> <?php echo "Rozmiar " . filesize($dir[$_GET['imgid']]) . "B"; ?> </p>
            <p style="text-align: center">
                <a href="javascript:history.back();">Powrót</a>
            </p>
        <?php } ?>
    <?php } else { ?>
        <div>
            <div class="gallery" style="float:left;">
                <?php
                $range_left  = ($page == 0)? 0 : $page * 4;
                $range_right = ($page * 4) + 4;
                for ($i=$range_left; $i<$range_right; $i++) {
                    echo '<a href="Zad5.8.2.php?imgid='.$i.'" target="_self">'
                        .'<img style=" width: 200px; height: 250px; padding: 0; margin: 15px;" 
                        src="'.($dir[$i] ?? '').'" alt="'.basename($dir[$i] ?? ' ').'" />'
                        .'</a>';
                }
                ?>
            </div>
            <div class="navigation" style="text-align: center; padding: 1%; clear: left">
                <a style="margin: 0 1%" href="?page=<?php echo (($page - 1) < 0)? 0 : $page - 1; ?>">Poprzednie zdjęcia</a>
                <a style="margin: 0 1%" href="?page=<?php echo (($page + 1) > count($dir) / 4)? $page : $page + 1; ?>">Następne zdjęcia</a>
            </div>
            <div class="form" style="text-align: center">
                <form method="post" action="scaled.php">
                    <p>Podaj nazwę pliku: <input type="text" name="filename"></p>
                    <p>Podaj nową szerokość zdjęcia: <input type="number" name="new_width"></p>
                    <p>Podaj nową wysokość zdjęcia: <input type="number" name="new_high"></p>
                    <p>Podaj kąt obrócenia zdjęcia (opcjonalnie): <input type="number" name="angle"></p>
                    <p><input type="submit" value="Przeskaluj"></p>
                </form>

            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>