<?php

$connection = new mysqli('localhost','root','','baza');
$myname = "Andrzej";
$mypass = "haslo12345";

if(isset($_POST['login'])){
    $nazwa = $_POST['nazwauzytkownika'];
    $haslo = $_POST['haslo'];
    if($nazwa == $myname and $haslo == $mypass){
        if(isset($_POST['remember'])){
            setcookie('nazwauzytkownika', $nazwa, time()+60*1*1);
            setcookie('haslo', $haslo, time()+60*1*1);
        }
        session_start();
        $_SESSION['nazwauzytkownika'] = $nazwa;
        header("location: witamy.php");
    }
    else{
        echo "Nazwa lub haslo sa niepoprawne";
    }
}
else{
    header("location: formularz_logowania.html");
}

?>