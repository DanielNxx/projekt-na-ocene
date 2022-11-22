<?php
$connection = new mysqli('localhost','root','','baza');

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo "Logged in";
    mysqli_close($connection);
}
?>