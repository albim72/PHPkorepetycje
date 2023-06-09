<?php
interface mojProstyInt{
    public function met1();
    public function met2();
}

interface drugiM{
    public function policzAB($a,$b);
}

class Zastosowanie implements mojProstyInt, drugiM{
    public function met1(){
        echo "pierwsza metoda interfejsu mojProstyInt";
        echo "<br>";
    }
    public function met2(){
        echo "druga metoda interfejsu mojProstyInt";
        echo "<br>";
    }
    public function policzAB($a,$b){
        echo "wynik: ";
        echo $a-2*$b;
    }
}

$obj = new Zastosowanie();
$obj->met1();
$obj->met2();
$obj->policzAB(5,8);
?>
