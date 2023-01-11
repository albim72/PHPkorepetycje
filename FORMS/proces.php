<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mysql_host = "localhost:3306";
    $mysql_username = "root";
    $mysql_password = "abc123";
    $mysql_database = "testowa";

    $u_name = filter_var($_POST["user_name"],FILTER_SANITIZE_STRING);
    $u_email = filter_var($_POST["user_email"],FILTER_SANITIZE_EMAIL);
    $u_text = filter_var($_POST["user_text"],FILTER_SANITIZE_STRING);

    if (empty($u_name)){
        die("Podaj proszę swoje imię!!");
    }

    if (empty($u_email) || !filter_var($u_email,FILTER_VALIDATE_EMAIL)){
        die("Podaj właściwy adres e-mail!!");
    }

    if (empty($u_text)){
        die("Proszę wpisz tekst!!");
    }

    $mysqli = new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);
    if($mysqli->connect_error){
        die("Połączenie niemożliwe: ".$mysqli->connect_error);
    }

    $statement = $mysqli->prepare("INSERT INTO users_data(user_name,user_email,user_message)
    VALUES(?,?,?)");
    $statement->bind_param('sss',$u_name,$u_email,$u_text);

    if($statement->execute()){
        print "Witaj " . $u_name . "!, Twoja wiadmość została zapisana!";
    }
    else{
        print $mysqli->error;
    }

}
?>
