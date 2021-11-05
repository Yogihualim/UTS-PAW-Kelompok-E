<?php
    $host = "localhost";
    $user = "id17829466_etravell1";
    $pass = "+xMTZB!{N1lD]cr#";
    $name = "id17829466_percobaan1";

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_errno();
    }
?>