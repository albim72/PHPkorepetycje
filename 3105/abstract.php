<?php
abstract class Imiona {
    abstract protected function prefixImie($imie);
}

class Osoba extends Imiona {
    public function prefixImie($imie,$separator="--",$funkcja="prezes")
    {
        if($imie=='Joanna Nowak'){
            $prefix="Pani";
        }elseif($imie=='Jan Nowak'){
            $prefix="Pan";
        }
        else{
            $prefix="";
        }
        return "{$funkcja}{$separator}{$prefix}{$imie}";
    }
}

$os = new Osoba();
echo $os->prefixImie("Joanna Nowak");

?>
