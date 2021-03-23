<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/temp.css">
    <title>Student Portal</title>
</head>
<body>
    <header>
        <div class="title">
          <?php  echo $name; ?>
        </div>
        <nav>
            <ul>
                <li><a href="#"><img src="../images/avatar.png" alt="" width="30px" height="30px"></a></li>
                <li><a href="#"><?php  echo $name; ?></a></li>
                
            </ul>
        </nav>
    </header>
    <div class="sidebar">
        <div class="id">
            <img src="../images/avatar.png" alt="" width="100px" height="100px">
            <h5><?php  echo $name; ?></h5>
        </div> <br> <br><br>
        <div class="status">
            <div></div>
            <h6>Online</h6>
        </div>
    </div>
</body>
</html>