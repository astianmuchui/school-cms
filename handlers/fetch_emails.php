<?php
        $hostname = 'localhost';
        $host_user= 'root';
        $host_password='';
        $dbname='login_system';
        $conn = mysqli_connect($hostname,$host_user,$host_password,$dbname);
        $query = "SELECT * FROM users ORDER by id desc";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
?>