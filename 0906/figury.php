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

class Trojkat extends Figura {
    public function __construct($a,$b)
    {
        parent::__construct($a,$b);
    }
    public function policzPole(){
        return $this->a*$this->b/2;
    }
}


class Trapez extends Figura {
    public $h;
    /**
     * @param $h
     */
    public function __construct($a,$b,$h)
    {
        parent::__construct($a,$b);
        $this->h=$h;
    }
    public function policzPole(){
        return ($this->a+$this->b)*$this->h/2;
    }
}
$pr = new Prostokat(9.3,6.7);
echo "pole prostokąta: {$pr->policzPole()}";
echo "<br>";

$tr = new Trojkat(6.6,10.5);
echo "pole trójkąta: {$tr->policzPole()}";

echo "<br>";

$trp = new Trapez(8.4,6.4,4,8);
echo "pole trapezu: {$trp->policzPole()}";
?>
