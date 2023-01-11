<?php
$servername = "localhost:3306";
$username = "root";
$password = "abc123";
$dbname = "klienci";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Połączenie niemożliwe: ".$conn->connect_error);
}

$sql = "
CREATE TABLE znajomi(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30) NOT NULL,
    nazwisko VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
";

if($conn->query($sql)===TRUE){
    echo "baza danych założona!";
}
else{
    echo "błąd SQL: ".$conn->error;
}
$conn->close();
?>
