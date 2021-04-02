<?php

    $hostname = 'localhost';
    $host_user= 'root';
    $host_password='';
    $dbname='login_system';
    $conn = mysqli_connect($hostname,$host_user,$host_password,$dbname);
    $query = 'SELECT * FROM blogposts';
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo count($posts);
?>