<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj</title>
    <link rel="stylesheet" href="css/formularzrej.css">

    <?php
    if(isset($_COOKIE['nazwauzytkownika']) and isset($_COOKIE['haslo'])){
        $nazwa = $_COOKIE['nazwauzytkownika'];
        $haslo = $_COOKIE['haslo'];
        echo "<script>
        document.getElementById('nazwauzytkownika').value = '$nazwa';
        document.getElementById('haslo').value = '$haslo';
        </script>";
    }
    ?>




</head>
<body>
    <h1>Zaloguj się:</h1>
    <form method="post" action="php/login.php">
        <table>
            <tr>
                <td>Nazwa użytkownika</td>
                <td><input type="text" name="nazwauzytkownika" id="nazwauzytkownika"></td>
            </tr>
            <tr>
                <td>Hasło</td>
                <td><input type="text" name="haslo" id="haslo"></td>
            </tr>
            <tr>
                <td><button type="submit" action="php/login.php" name="login">Zaloguj</td>
                <td><input type="checkbox" name="remember">Zapamiętaj</td>
            </tr>
        </table>
    </form>
</body>
</html>