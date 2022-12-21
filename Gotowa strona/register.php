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
        mysqli_close($connection);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_1.css">
    <title>Document</title>
</head>
<body>
    <h1>Zarejestrowano pomyślnie</h1>
    <section id="middle">
        <a href="formularz_logowania.php">Zaloguj się</a> </br>
        <a href="#">Wróć do strony głównej</a>
    </section>
</body>
</html>