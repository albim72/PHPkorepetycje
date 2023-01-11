<?php
$servername = "localhost:3306";
$username = "root";
$password = "abc123";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Połączenie niemożliwe: ".$conn->connect_error);
}

$sql = "CREATE DATABASE klienci";

if($conn->query($sql)===TRUE){
    echo "baza danych założona!";
}
else{
    echo "błąd SQL: ".$conn->error;
}
$conn->close();
?>
