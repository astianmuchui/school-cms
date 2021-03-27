<?php
    require '../admin/config.php';
    $test = "jane doe";

    
    function login($user_name,$pass_word){
        require '../admin/config.php';

        global $errors;
        $errors = array();
        if(empty($user_name)){
            echo 'Please Enter your username <br>';
        }
        if(empty($pass_word)){
            echo 'Password cannot be blank <br>';
        }
            if(!empty($user_name) && !empty($pass_word)){
         
                $query = "SELECT * FROM users";
                $result = mysqli_query($conn,$query);
                $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
                
                foreach($users as $user):
                    $username = $user['username'];
                    $password = $user['passcode'];
                
                if(($user_name == $username) && ($pass_word == $password)){
                    
                header("location: ../portals/$user_name");
            }else{
                
            }
        endforeach;
        mysqli_free_result($result);
                mysqli_close($conn);   
        }


    }


    if(isset($_POST['submit'])){
        $user_name = $_POST['username'];
        $pass_word = $_POST['password'];
        login($user_name,$pass_word);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login into your account</title>
</head>
<body>
    <h1 class="well">Login</h1>
    <div class="container well"> 
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <input type="submit" value="Login" class="form-control btn-dark" name="submit">
    </form>
    </div>
</body>
</html>