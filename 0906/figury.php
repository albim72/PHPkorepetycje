<?php
abstract class Figura{
    public $a;
    public $b;
    /**
     * @param $a
     * @param $b
     */

     public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
     }

     abstract public function policzPole();
}
?>
