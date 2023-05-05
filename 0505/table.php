<?php
$username = "root";
$passwd = "abc123";
$servername = "localhost:3306";
$dbname = "klienci";

$conn = new mysqli($servername,$username,$passwd,$dbname);

if($conn->connect_error){ 
    die("Połączenie niemożliwe... ".$conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS znajomi(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30) NOT NULL,
    nazwisko VARCHAR(30) NOT NULL,
    email VARCHAR(100),
    reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

);";

if($conn->query($sql) === TRUE){
    echo "tabela została utworzona!";
}
else {
    echo "błąd echo".$conn->error;
}
$conn->close();

?>