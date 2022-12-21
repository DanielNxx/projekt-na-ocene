<?php
#$uzytkownik = $_POST['uzytkownik'];
#$tresc = $_POST['tresc'];
#$tytul = $_POST['tyul'];

$connection = new mysqli('localhost','root','','baza');

#if (mysqli_connect_errno()){
#    echo "Failed to connect to MySQL: " . mysqli_connect_error();
#}
#else{
#    $command = "INSERT INTO `komentarze`(`uzytkownik`, `tresc`, `tytul`) VALUES ('".$uzytkownik."','".$tresc."','".$tytul."')";
#    $result = $connection->query($command);
#    if($result){
#        echo "Dodano komentarz pomyślnie";
#        mysqli_close($connection);
#    }
#}

if(isset($_POST['comment'])){
    $uzytkownik = $_POST['uzytkownik'];
    $tresc = $_POST['tresc'];
    $tytul = $_POST['tytul'];
    $command = "INSERT INTO `komentarze`(`uzytkownik`, `tresc`, `tytul`) VALUES ('".$uzytkownik."','".$tresc."','".$tytul."')";
    $result = $connection->query($command);
    if($result){
        $command2 = "SELECT `uzytkownik`, `tresc`, `tytul` FROM `komentarze` WHERE tytul = 'cvbcvbcvb';";
        $result2 = $connection->query($command2);
        if($result2){
            echo "<h1>".$tytul."</h1>";
            echo "<h2>".$uzytkownik."</h2>";
            echo "<h3>".$tresc."</h3>";
        }
        mysqli_close($connection);
    }
}
else{
    echo "Błąd z połączeniem";
}
?>