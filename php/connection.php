<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db  = "glitch";

    $conn = mysqli_connect($host,$user,$password,$db);

    if(!$conn){
        echo"not successful";
    }



?>