<?php

$nazwa = $_POST['nazwa'];
$email = $_POST['email'];
$haslo = $_POST['haslo'];

$connection = new mysqli('localhost','root','','baza');

if (mysqli_connect_errno()){
    echo "Problem z połączeniem z bazą danych: " . mysqli_connect_error();
}
else{
    $command = "INSERT INTO `dane_uzytkonika`(`uzytkonik_id`, `email`, `haslo`, `nazwa`) VALUES ('NULL','".$email."','".$haslo."','".$nazwa."')";
    $result = $connection->query($command);
    if($result){
        echo "<h1>Zarejestrowano</h1>";
    mysqli_close($connection);
    }
}
?>