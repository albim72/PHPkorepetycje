<?php
$username = "root";
$passwd = "abc123";
$servername = "localhost:3306";

$conn = new mysqli($servername,$username,$passwd);

if($conn->connect_error){ 
    die("Połączenie niemożliwe... ".$conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS klienci";
if($conn->query($sql) === TRUE){
    echo "baza została utworzona!";
}
else {
    echo "błąd echo".$conn->error;
}
$conn->close();

?>
