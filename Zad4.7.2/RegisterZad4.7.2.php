<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>
    <h1>Rejestracja:</h1><br>
    <form method="post" action="RegisterZad4.7.2.php">
        Imię: <input type="text" name="firstname"> <br> <br>
        Nazwisko: <input type="text" name="lastname"> <br> <br>
        Email: <input type="email" name="mail"> <br> <br>
        Hasło: <input type="password" name="pass"> <br> <br>
        <input type="submit" name="register" value="Rejestruj"> <br> <br>
    </form>
    <a href="LogowanieZad4.7.2.php">Logowanie</a>
    <?php
        error_reporting(E_CORE_WARNING);
        if(isset($_POST['register'])) {
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['pass'])
                && preg_match("/^[a-z0-9\_\.\-]+@[a-z0-9\_\.\-]+(\.[a-z0-9\_\.\-]+)+/i", $_POST['mail'])
                && preg_match("/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[-._!\"`\'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|])\S*$/", $_POST['pass'])) {

                if (!$fd = fopen('dane.txt', 'a+')) {
                    echo "Nie można otworzyć pliku dane.txt";
                } else {
                    while (!feof($fd)) {
                        $str = trim(fgets($fd), " \n");
                        $data = explode(" ", $str);
                        if ($data[2] == $_POST['mail']) {
                            echo "<p style='color: red'>Istnieje już konto o takim adresie email.</p>";
                            exit();
                        }
                    }
                    fwrite($fd, $_POST['firstname'] . " " . $_POST['lastname'] . " " . $_POST['mail'] . " " . $_POST['pass'] . "\n");
                    fclose($fd);
                }

            } else if (preg_match("/^[a-z0-9\_\.\-]+@[a-z0-9\_\.\-]+(\.[a-z0-9\_\.\-]+)+/i", $_POST['mail']) == false) {
                echo "<p style='color: red'>Niepoprawny adres email.</p>";
            } else if (preg_match("/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[-._!\"`\'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|])\S*$/", $_POST['pass']) == false) {
                echo "<p style='color: red'>Niepoprawne hasło (hasło musi zawierać co najmniej 6 znaków, co najmniej 1 dużą literę, co najmniej 1 cyfrę oraz co najmniej 1 znak specjalny.</p>";
            } else {
                echo "<p style='color: red'>Błędne dane.</p>";
            }
        }
    ?>
</body>
</html>