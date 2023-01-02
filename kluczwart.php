<?php
$osoby = array("Olek"=>"Ola","Leon"=>"Roma","Tomek"=>"Ewa","Tadeusz"=>"Edyta");
echo "wypisanie par: <br>";
foreach ($osoby as $f => $f_value){
    echo "element: ".$f." - element: ".$f_value."<br>";
}

echo "w inny sposób: <br>";
$klucze = array_keys($osoby);
$ile=count($osoby);

for ($i=0;$i<$ile;++$i){
    echo "facet: ".$klucze[$i]." - kobieta: ".$osoby[$klucze[$i]]."<br>";
}
?>
