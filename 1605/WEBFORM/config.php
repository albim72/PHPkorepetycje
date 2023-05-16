<?php
define('DB_SERVER','localhost:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD', 'abc123');
define('DB_NAME','dbtestowa');

$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link===false){
    die("ERROR: brak możliwości połączenia".mysqli_connect_error())
}

?>
