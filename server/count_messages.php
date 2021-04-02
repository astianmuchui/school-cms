<?php

    $hostname = 'localhost';
    $host_user= 'root';
    $host_password='';
    $dbname='login_system';
    $conn = mysqli_connect($hostname,$host_user,$host_password,$dbname);
    $query = 'SELECT * FROM messages';
    $result = mysqli_query($conn,$query);
    $messages = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo count($messages);
?>