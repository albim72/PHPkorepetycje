<?php
$intArray = array(11,12,2,17,88,95,345);
echo "element tablicy: $intArray[0] <br>";
echo "element tablicy: $intArray[1] <br>";
echo "element tablicy: $intArray[3] <br>";

//zmienne systemowe globals
$x = 1001;
$y = 656;

function multip(){
    $GLOBALS['z'] = $GLOBALS['x']*$GLOBALS['y'];
}
multip();
echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
