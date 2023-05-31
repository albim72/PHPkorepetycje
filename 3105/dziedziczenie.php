<?php
class Owoc{
    public $nazwa;
    public $kolor;
    public $waga;

    /**
     * za stan odpowiada konstruktor -> funkcja inicjująca pola opisujące obiekt!
     */
    public function __constuct($nazwa,$kolor,$waga)
    {
       $this->nazwa = $nazwa;
       $this->kolor = $kolor;
       $this->waga = $waga;
    }

    public function opis() {
        echo "Owoc {$this->nazwa}, a jego kolor to {$this->kolor}, waga sztuki: {$this->waga} g";
    }
}
class Truskawka extends Owoc {
    public $dlugosc;
    public function __constuct($nazwa,$kolor,$waga,$dlugosc){
        parent::__constuct($nazwa,$kolor,$waga);
        $this->dlugosc = $dlugosc;

    }

    public function opis() {
        echo "Owoc {$this->nazwa}, a jego kolor to {$this->kolor}, 
        waga sztuki: {$this->waga} g, długość: {$this->dlugosc} cm";
    }
}

class Arbuz extends Owoc{
    public $smak;
    public function __constuct($nazwa,$kolor,$waga,$smak){
        parent::__constuct($nazwa,$kolor,$waga);
        $this->smak = $smak;

    }

    public function opis() {
        echo "Owoc {$this->nazwa}, a jego kolor to {$this->kolor}, 
        waga sztuki: {$this->waga} g, opis smaku: {$this->smak}";
    }
}

$trusk = new Truskawka("Truskawka","czerwony",21,3.5);
$trusk->opis();
echo "<br>";
$arb = new Arbuz("Arbuz","zielony",2450,"wodnisty, słodki");
$arb->opis();
?>
