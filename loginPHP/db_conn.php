<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "logindb";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn){
        echo "failed connection";
    }
