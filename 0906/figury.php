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

class Prostokat extends Figura {
    public function __construct($a,$b)
    {
        parent::__construct($a,$b);
    }
    public function policzPole(){
        return $this->a*$this->b;
    }
}

$pr = new Prostokat(9.3,6.7);
echo "pole prostokąta: {$pr->policzPole()}"
?>
