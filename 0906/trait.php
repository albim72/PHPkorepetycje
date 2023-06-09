<?php
trait informacja {
    public function info(){
        echo "metoda obiektu trait..."
    }
}

trait opis {
    public function dane(){
        echo "to jest opis dla metody dane...s"
    }
}

class Pierwsza{
    use informacja;
    public function info(){
        echo "to jest metoda obiektu klasy ..."
    }
}

class Druga{
    use informaca,opis;
}

$pr = new Pierwsza();
$pr -> info();
echo "<br>";

$o2 = new Druga();
$o2 -> info();
echo "<br>";
$o2 -> dane();
?>
