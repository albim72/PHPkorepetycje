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

    function __destruct()
    {
        echo "Owoc to: {$this->nazwa}.<br>Kolor owocu: {$this->kolor}.";
    }


}

$jablko = new Owoc("Jabłko","czerwony");

echo "{$jablko->kolor}<br>";
?>
