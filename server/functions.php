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
    


    
   

   
?>