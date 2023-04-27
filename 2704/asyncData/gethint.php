<?php
    $a[] = "Anna";
    $a[] = "Antek";
    $a[] = "Annoniusz";
    $a[] = "Tomasz";
    $a[] = "Tola";
    $a[] = "Tytus";
    $a[] = "Tobiasz";
    $a[] = "Tobisław";
    $a[] = "Marek";
    $a[] = "Marta";

    $q = $_REQUEST["q"];
    $hint = "";

    if($q!==""){
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($a as $name) {
            if(stristr($q,substr($name,0,$len))){
                if($hint === ""){
                    $hint=$name;
                }
                else{
                    $hint.=",$name";
                }
            }
        }
    }
    echo $hint === ""?"brak rekomendacji":$hint

?>
