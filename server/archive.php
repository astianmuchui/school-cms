<?php
    //A store for relevant functions in the system

    
    #1 - Adding assignments to the database
    function insert($title,$document){
        global $errors,$conn;        
        if(empty($title)){
            array_push($errors,"Title Required");
        }
        if(empty($document)){
            array_push($errors,"Document Required");
        }
        if(count($errors) == 0){
            if(!empty($document)){
                $folder = './assignments/';
                $filename = basename($document);
                $file_path = $folder.$filename;
                $extension  = pathinfo($file_path, PATHINFO_EXTENSION);
                $formats = array('pdf','docx','zip','txt','rar');
                $doc = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                $tmp_name = $_FILES['pdf']['tmp_name'];
                if(in_array($extension,$formats)){
                    if(move_uploaded_file($tmp_name,$file_path)){
                        include './config.php';
                        $query = "INSERT INTO assignments (title, doc_file) VALUES('$title','$filename')";
                        $action = mysqli_query($conn,$query);  
                        if($action){
                            echo 'Uploaded succesfully';
                        }else{
                            echo 'Failed to add assignment';
                            return false;
                        }
                    }else{
                        echo 'Failed operation';
                    }
                }else{
                    array_push($errors,"Could not complete request");
                    echo 'Invalid file format';
                }
            }else{
                echo 'Document Required';
            }
        }else{
            print_r($errors);
            return false;
        }
    }
    #2 - Sign up user
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
    #3 - Create user profile
    function createportal(){
        include 'database.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 
        
        

        foreach($users as $user):
            $username = $user['username'];
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
                <script src="../../javascript/font_awesome_main.js" crossorigin="anonymous"></script>
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
                             <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>   

                            
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
                    <div class="back">
                    <a href="#">  Go  back to website <i class="fas fa-arrow-right"></i></a>
                </div> <br> <br>
                <div class="back">
                    <a href="#">Received Messages</a>
                </div> <br> <br>
                <div class="back">
                    <a href="#">Make suggestion</a>
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
                            <a href="../../control/edit_email.php?id=<?php echo $user["user_id"];?>">change</a>
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
    #4 - connect database
    function connectDB(){
        $hostname = 'localhost';
        $host_user= 'root';
        $host_password='';
        $dbname='login_system';
        $conn = mysqli_connect($hostname,$host_user,$host_password,$dbname);
    }
    #5 - fetch data from database
    function fetch(){
        include 'database.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 
    }

?>