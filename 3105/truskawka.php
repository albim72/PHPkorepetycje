<?php

    class Owoc {
        public $nazwa;
        public $kolor;

        /**
         * Owoc constructor.
         * @param $nazwa
         * @param $kolor
         */
        public function __construct($nazwa, $kolor)
        {
            $this->nazwa = $nazwa;
            $this->kolor = $kolor;
        }

        public function opis() {
            echo "Owoc to: {$this->nazwa}, a jego kolor to: {$this->kolor}.";
        }


    }

    class Truskawka extends Owoc {



        public $waga;

        /**
         * Truskawka constructor.
         * @param $waga
         */
        public function __construct($nazwa,$kolor,$waga)
        {
           parent::__construct($nazwa,$kolor);
            $this->waga = $waga;
        }

        public function opis() {
            echo "Owoc to: {$this->nazwa}, a jego kolor to: {$this->kolor}, średnia waga wynosi - {$this->waga}.";
        }


    }

    class Banan extends Owoc {

    }

    $trusk = new Truskawka("Truskawka","czerwony",34);
    $trusk->opis();
    echo "<br>";
    $banan = new Banan("Banan","żółty");
    $banan->opis();



?>
