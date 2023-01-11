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
 INSERT INTO znajomi(imie,nazwisko,email)
 values ('Paweł','Kot','pk34@wp.pl'),
 ('Paweł','Knot','ppk34@wp.pl'),
 ('Paula','Mróz','pm34@wp.pl'),
 ('Olaf','Nowak','on34@wp.pl'),
 ('Leon','Kowal','lk34@wp.pl'),
 ('Beata','Myc','bm34@wp.pl'),
";

if($conn->query($sql)===TRUE){
    echo "dodano rekordy!";
}
else{
    echo "błąd SQL: ".$conn->error;
}
$conn->close();
?>
