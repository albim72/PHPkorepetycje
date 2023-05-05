<?php
$username = "root";
$passwd = "abc123";
$servername = "localhost:3306";
$dbname = "klienci";

$conn = new mysqli($servername,$username,$passwd,$dbname);

if($conn->connect_error){ 
    die("Połączenie niemożliwe... ".$conn->connect_error);
}

$sql = "INSERT INTO znajomi(imie,nazwisko,email)
values ('Janusz','Knot','janukot@abc.pl'),
('Olga','Kowal','olga@abc.pl'),
('Jerzy','Kulka','kul@abc.pl'),
('Olaf','Nowak','olo@abc.pl'),
('Ala','Krot','ala@abc.pl');";

if($conn->query($sql) === TRUE){
    echo "dane zostały dodane!";
}
else {
    echo "błąd dodania danych".$conn->error;
}
$conn->close();

?>