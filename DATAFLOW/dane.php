<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odpowiedź</title>
</head>
<body>
    <h3>Dane z formularza...</h3>
    <?php    
    $name=$_POST['imie'];
    $email=$_POST['email'];
    ?>
    Witaj <?php echo "$name"?><br>
    Adres e-mail: <?php echo "$email"?><br>

    <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "abc123";
    $dbname = "formularze_php";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Połączenie niemożliwe: ".$conn -> connect_error);
    }

    $sql = "INSERT INTO rejestracja(imie,email) values ('$name','$email')";


    if(mysqli_query($conn,$sql)){
        echo "rekord dodano!";
    }else{
        echo "Error: ".$sql."-".mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>
</html>
