<?php
    function createportal(){
        include 'database.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 

        foreach($users as $user):
            $username = $user['username'];
            $adm_no = $user['adm_no'];
            $student_email = $user['user_mail'];
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
                <title>'.$username.'</title>
            </head>
            <body>
                <header>
            
                    <div class="title">
                        School name
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#"><img src="../../images/avatar.png" alt="" width="30px" height="30px"></a></li>
                            <li><a href="#">'.$username.'</a></li>
                            
                        </ul>
                    </nav>
                </header>
                <div class="sidebar">
                    <div class="id">
                        <img src="../../images/avatar.png" alt="" width="100px" height="100px">
                        <h5>'.$username.'</h5>
                    </div> <br> <br><br>
                    <div class="status">
                        <div></div>
                        <h6>Online</h6>
                    </div>
                    <div class="details">
                       <span>Adm no:</span>
                        <h3> '.$adm_no.'</h3>
                    </div>
                </div>
                <div class="panel">
                    <div class="welcome">
                        <h2>Welcome ,</h2>
                    </div>
                    <div class="cards-container">
                        <div class="card">
                            <p>Email Adress</p>
                            <small>'.$student_email.'</small>
                            <a href="#">change</a>
                        </div>
                        <div class="card">
                            <p>Available Assignments</p>
                            <small><?php require "../../server/assignment_numbers.php";?></small>
                            <a href="../../assignments/">View</a>
            
                        </div>
                        <div class="card">
                            <p>Extra Exams</p>
                            <small><?php require"../../server/exam_numbers.php";?></small>
                            <a href="../../exams">View</a>
                        </div>
                        
                        
                    </div>
                </div>
            
            </body>
            </html>';
            
            mkdir("../portals/$username");
            $file = fopen("../portals/$username/index.php","w");
            fwrite($file, $body);
            fclose($file);
            
        endforeach;
   
    }
    createportal();
?>