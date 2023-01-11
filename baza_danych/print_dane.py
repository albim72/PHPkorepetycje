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
 SELECT * FROM znajomi
";

if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>id osoby</th>";
        echo "<th>imię</th>";
        echo "<th>nazwisko</th>";
        echo "<th>email</th>";
        echo "<th>czas</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['imie']."</td>";
            echo "<td>".$row['nazwisko']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['reg_data']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    else {
        echo "nie znaleziono rekordów";
    }
}
else {
    echo "błąd SQL: ".$conn->error;
}
$conn->close();
?>
