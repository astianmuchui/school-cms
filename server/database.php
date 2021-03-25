<?php
    $hostname = 'localhost';
    $host_user= 'root';
    $host_password='';
    $dbname='login_system';
    $conn = mysqli_connect($hostname,$host_user,$host_password,$dbname);
    if($conn){
        echo '<small></small>  <h1>Connected to database</h1>';
        
    }else{
        echo '<div></div> <h1>Unsuccesful Connection</h1>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection File</title>
</head>
<body>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            justify-items: center;
            background: #000;
        }
        *{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h1{
            color: white;
        }
        small{
            width: 30px;
            height: 30px;
            background-color: rgb(57, 221, 87);
            border-radius: 500px;
            margin-right: 20px;
        }
        div{
            width: 30px;
            height: 30px;
            background-color: red;
            border-radius: 500px;
            margin-right: 20px;
        }
    </style>
</body>
</html>