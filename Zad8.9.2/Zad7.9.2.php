<?php
    class Car{
        protected static int $ile = 0;
        protected $model;
        protected $cena;
        protected $kurs;

        public function __construct($model, $cena, $kurs){
            if(is_string($model) && is_numeric($cena) && is_double($kurs)) {
                self::$ile++;
                $this->model = $model;
                $this->cena = $cena;
                $this->kurs = $kurs;
            } else {
                die("Podano niewłaściwe wartości");
            }
        }

        public function __get($property) {
            if ($property === 'model') {
                return $this->model;
            }
            if ($property === 'cena'){
                return $this->cena;
            }
            if ($property === 'kurs'){
                return $this->kurs;
            }
        }

        public function __set($property, $value) {
            if ($property === 'model') {
                $this->model = $value;
            }
            if ($property === 'cena'){
                $this->cena = $value;
            }
            if ($property === 'kurs'){
                $this->kurs = $value;
            }
        }

        public function value(){
            return $this->cena * $this->kurs;
        }

        public function __toString(): string
        {

            return "Ile: " . self::$ile . "\n" .
                "Model: $this->model\n".
                "Cena: $this->cena\n".
                "Kurs: $this->kurs\n";
        }

    }

    class NewCar extends Car{
        private $alarm;
        private $radio;
        private $climatronic;

        public function __construct($model, $cena, $kurs, $alarm, $radio, $climatronic)
        {
            if(is_string($model) && is_numeric($cena) && is_double($kurs) && is_bool($alarm) && is_bool($radio) && is_bool($climatronic)) {
                self::$ile++;
                $this->model = $model;
                $this->cena = $cena;
                $this->kurs = $kurs;
                $this->alarm = $alarm;
                $this->radio = $radio;
                $this->climatronic = $climatronic;
            } else {
                die("Podano niewłaściwe wartości");
            }
        }

        public function __get($property) {
            if ($property === 'model') {
                return $this->model;
            }
            if ($property === 'cena'){
                return $this->cena;
            }
            if ($property === 'kurs'){
                return $this->kurs;
            }
            if ($property === 'alarm') {
                return $this->alarm;
            }
            if ($property === 'radio'){
                return $this->radio;
            }
            if ($property === 'climatronic'){
                return $this->climatronic;
            }
        }

        public function __set($property, $value) {
            if ($property === 'alarm') {
                $this->alarm = $value;
            }
            if ($property === 'radio'){
                $this->radio = $value;
            }
            if ($property === 'climatronic'){
                $this->climatronic = $value;
            }
        }

        public function value()
        {
            if($this->alarm == true) {
                return ($this->cena + ($this->cena * 0.05)) * $this->kurs;
            } elseif ($this->radio == true) {
                return ($this->cena + ($this->cena * 0.075)) * $this->kurs;
            } elseif ($this->climatronic == true){
                return ($this->cena + ($this->cena * 0.1)) * $this->kurs;
            } elseif ($this->climatronic == true && $this->radio == true){
                return ($this->cena + ($this->cena * 0.175)) * $this->kurs;
            } elseif ($this->climatronic == true && $this->alarm == true){
                return ($this->cena + ($this->cena * 0.15)) * $this->kurs;
            } elseif ($this->radio == true && $this->alarm == true){
                return ($this->cena + ($this->cena * 0.08)) * $this->kurs;
            } elseif ($this->radio == true && $this->alarm == true && $this->climatronic == true){
                return ($this->cena + ($this->cena * 0.18)) * $this->kurs;
            }
        }

        public function __toString(): string
        {
            return "Ile: " . self::$ile . "\n" .
                "Model: $this->model\n".
                "Cena: $this->cena\n".
                "Kurs: $this->kurs\n".
                "alarm: $this->alarm\n".
                "radio: $this->radio\n".
                "klimatyzacja: $this->climatronic\n";
        }

    }

    class InsuranceCar extends NewCar{
        private $firstOwner;
        private $years;


        public function __get($property)
        {
            if ($property === 'model') {
                return $this->model;
            }
            if ($property === 'cena'){
                return $this->cena;
            }
            if ($property === 'kurs'){
                return $this->kurs;
            }
            if ($property === 'alarm') {
                return $this->alarm;
            }
            if ($property === 'radio'){
                return $this->radio;
            }
            if ($property === 'climatronic'){
                return $this->climatronic;
            }
            if ($property === 'firstOwner') {
                return $this->firstOwner;
            }
            if ($property === 'years') {
                return $this->years;
            }
        }

        public function __set($property, $value) {
            if ($property === 'firsOwner') {
                $this->firstOwner = $value;
            }
            if ($property === 'years'){
                $this->years = $value;
            }
        }

        public function __construct($model, $cena, $kurs, $alarm, $radio, $climatronic, $firstOwner, $years)
        {
            parent::__construct($model, $cena, $kurs, $alarm, $radio, $climatronic);
            if(is_bool($firstOwner) && is_numeric($years)){
                $this->firstOwner = $firstOwner;
                $this->years = $years;
            } else{
                die("Podano niewłaściwe wartości");
            }
        }


        public function value()
        {
            if($this->firstOwner){
                return $this->cena - (($this->cena * 0.1) * $this->years) - ($this->cena * 0.5);
            } else{
                return $this->cena - (($this->cena * 0.1) * $this->years);
            }
        }

        public function __toString(): string
        {
            return "Ile: " . self::$ile . "\n" .
                "Model: $this->model\n".
                "Cena: $this->cena\n".
                "Kurs: $this->kurs\n".
                "alarm: $this->alarm\n".
                "radio: $this->radio\n".
                "klimatyzacja: $this->climatronic\n".
                "Pierwszy właściciel: $this->firstOwner\n".
                "Ile lat: $this->years\n";
        }


    }


    if($_POST['Service'] == "Car" && !empty($_POST['model']) && !empty($_POST['cena']) && !empty($_POST['kurs'])) {
        if($_POST['cena'] < 1){
            echo "<p style='color: red'>Proszę podać poprawną cenę</p>";
        } elseif ($_POST['kurs'] < 1 || !is_numeric($_POST['kurs'])){
            echo "<p style='color: red'>Proszę podać poprawny kurs</p>";
        } else {
            $object = new Car($_POST['model'], intval($_POST['cena']), doubleval($_POST['kurs']));
            setcookie($object->__get('model'), $object->__toString());
            header('Location: ListaObiektow.php');
        }
    } elseif($_POST['Service'] == "NewCar" && !empty($_POST['model']) && !empty($_POST['cena']) && !empty($_POST['kurs']) && !empty($_POST['alarm']) && !empty($_POST['radio']) && !empty($_POST['klimatyzacja'])){
        if($_POST['cena'] < 1){
            echo "<p style='color: red'>Proszę podać poprawną cenę</p>";
        } elseif ($_POST['kurs'] < 1 || !is_numeric($_POST['kurs'])){
            echo "<p style='color: red'>Proszę podać poprawny kurs</p>";
        } else {
            $object = new NewCar($_POST['model'], intval($_POST['cena']), doubleval($_POST['kurs']), boolval($_POST['alarm']), boolval($_POST['radio']), boolval($_POST['klimatyzacja']));
            setcookie($object->__get('model'), $object->__toString());
            header('Location: ListaObiektow.php');
        }
    } elseif($_POST['Service'] == "InsuranceCar" && !empty($_POST['model']) && !empty($_POST['cena']) && !empty($_POST['kurs']) && !empty($_POST['alarm']) && !empty($_POST['radio']) && !empty($_POST['klimatyzacja']) && !empty($_POST['pierwszyWlasciciel']) && !empty($_POST['lata']) ){
        if($_POST['cena'] < 1){
            echo "<p style='color: red'>Proszę podać poprawną cenę</p>";
        } elseif ($_POST['kurs'] < 1 || !is_numeric($_POST['kurs'])){
            echo "<p style='color: red'>Proszę podać poprawny kurs</p>";
        } else {
            $object = new InsuranceCar($_POST['model'], intval($_POST['cena']), doubleval($_POST['kurs']), boolval($_POST['alarm']), boolval($_POST['radio']), boolval($_POST['klimatyzacja']), boolval($_POST['pierwszyWlasciciel']), intval($_POST['lata']));
            setcookie($object->__get('model'), $object->__toString());
            header('Location: ListaObiektow.php');
        }
    } else {
        echo "<p style='color: #ff0817'>Proszę uzupełnić wszystkie pola.</p>";
    }


?>