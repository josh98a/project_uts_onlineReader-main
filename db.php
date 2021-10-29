<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "uts";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_error()){
        echo "failed to connect to MySQL : " .mysqli_connect_error();
    }
?>