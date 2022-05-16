<?php
    class Car{
        private static $ile = 10;
        private $model;
        private $cena;
        private $kurs;

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
            return "Model: $this->model\n".
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
            if(is_string($model) && is_numeric($cena) && is_numeric($kurs) && is_bool($alarm) && is_bool($radio)  && is_bool($climatronic)) {
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
                return $this->cena + ($this->cena * 0.05);
            } elseif ($this->radio == true) {
                return $this->cena + ($this->cena * 0.075);
            } elseif ($this->climatronic == true){
                return $this->cena + ($this->cena * 0.1);
            } elseif ($this->climatronic == true && $this->radio == true){
                return $this->cena + ($this->cena * 0.175);
            } elseif ($this->climatronic == true && $this->alarm == true){
                return $this->cena + ($this->cena * 0.15);
            } elseif ($this->radio == true && $this->alarm == true){
                return $this->cena + ($this->cena * 0.08);
            } elseif ($this->radio == true && $this->alarm == true && $this->climatronic == true){
                return $this->cena + ($this->cena * 0.18);
            }
        }

        public function __toString(): string
        {
            return "Model: $this->model\n".
                "Cena: $this->cena\n".
                "Kurs: $this->kurs\n".
                "alarm: $this->alarm\n".
                "radio: $this->radio\n".
                "klimatyzacja: $this->climatronic\n".
        }

    }

?>