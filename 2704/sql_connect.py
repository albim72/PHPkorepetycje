<?php
$servername = "localhost:3306";
$username = "root";
$password = "abc123";

$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Połączenie z bazą niemożliwe: ".$conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS klienci";

if($conn->query($sql)===TRUE){
    echo "Baza dantch utworzona!";
}
else{
    echo "Błąd SQL ",$conn->error;
}
$conn->close();
?>
