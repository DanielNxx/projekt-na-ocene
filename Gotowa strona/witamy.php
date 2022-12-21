<?php
session_start();
echo "<h1>Witaj " .$_SESSION['nazwauzytkownika']."</h1>";
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
    <p>Zalogowałeś się</p>
    <p2><a href='logout.php'>Wyloguj się</a></p2>
    <p3><a href='formularz_logowania.php'>Przejdź do strony głównej</a></p3>
</body>
</html>