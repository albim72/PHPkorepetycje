<?php
$username = "root";
$passwd = "abc123";
$servername = "localhost:3306";
$dbname = "klienci";

$conn = new mysqli($servername,$username,$passwd,$dbname);

if($conn->connect_error){ 
    die("Połączenie niemożliwe... ".$conn->connect_error);
}

$sql = "SELECT id,imie,nazwisko FROM znajomi WHERE nazwisko='Kot';";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "id: ".$row["id"]." -> imię i nazwisko: ".$row["imie"]." ".$row["nazwisko"]."<br>";
    }

}else{
    echo "liczba wyników: 0";
}

$conn->close();

?>