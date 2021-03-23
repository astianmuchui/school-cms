<?php
    // require 'database.php';
    function signup($name,$adm,$password){
        //Ensuring the length of the student Id number.
        if(strlen($adm)>5){
            echo "<script>window.prompt('Please enter student Id below 5 characters');</script>";
        }else{
            //No problem here
        }
        if(strlen($name)>20){
            echo "<script>window.prompt('Name cannot exceed 20 characters');</script>";
        }
        $query = "INSERT INTO users (username,adm_no,passcode) VALUES('$name',$adm,$password)";
        include 'database.php';
        $action = mysqli_query($conn,$query);  
        if($action){
            header("Location: '../determiners/sucess.php'");
        } else{
            echo 'could not sign up';
        }
    }
    function fetch(){
        include 'database.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 
    }
    


    function createportal(){
        include 'database.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 
        
        $body = '
        <?php
            require "../../server/db_pure.php";
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../css/temp.css">
            <title><?php echo $username; ?></title>
        </head>
        <body>
            <header>
                <div class="title">
                  <?php  echo $username; ?>
                </div>
                <nav>
                    <ul>
                        <li><a href="#"><img src="../../images/avatar.png" alt="" width="30px" height="30px"></a></li>
                        <li><a href="#"><?php  echo $username; ?></a></li>
                        
                    </ul>
                </nav>
            </header>
            <div class="sidebar">
                <div class="id">
                    <img src="../../images/avatar.png" alt="" width="100px" height="100px">
                    <h5><?php  echo $username; ?></h5>
                </div> <br> <br><br>
                <div class="status">
                    <div></div>
                    <h6>Online</h6>
                </div>
            </div>
        </body>
        </html>
        ';

        foreach($users as $user):
            $username = $user['username'];
            mkdir("../portals/$username");
            $file = fopen("../portals/$username/index.php","w");
            fwrite($file, $body);
            fclose($file);
            
        endforeach;

    }
    createportal();
   
?>