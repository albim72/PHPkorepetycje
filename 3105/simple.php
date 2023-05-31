<?php
/**
 * obiekt -> skłąda się z dwóch elementów: stan, zachowanie
 * STAN -> dane(pola)
 * ZACHOWANIE -> funkcja(metoda)
 */
class Informacja{
    const MOJE_INFO = "to jest ważna informacja!";
    public function msg(){
        echo self::MOJE_INFO;
    }
}
$inf = new Informacja();
$inf->msg()
?>
