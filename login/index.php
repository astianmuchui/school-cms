<?php
   session_start();     
    require '../admin/config.php';
    
    $URL_ID = rand(500,1000000);
    
    function login($user_name,$pass_word){
        require '../admin/config.php';
        global $errors,$URL_ID,$conn;
        $errors = array();
        if(empty($user_name)){
            echo 'Please Enter your username <br>';
        }
        if(empty($pass_word)){
            echo 'Password cannot be blank <br>';
        }
            if(!empty($user_name) && !empty($pass_word)){
              require '../admin/config.php';
              
              $query = "SELECT * FROM `users` WHERE username = '$user_name'";
              $result = mysqli_query($conn,$query);
              $user = mysqli_fetch_assoc($result);
              mysqli_free_result($result);
              mysqli_close($conn);
              //Check if user exists
              if($result == true){
                  //User exists
                $password = $user['passcode'];
                $_SESSION['url_id'] = $URL_ID;

                if($pass_word == $password){
                    header("Location: ../portals/$user_name?id=$URL_ID");
                }else{

                  echo "Invalid Credentials";
                  
                }

              }else{
                echo 'Username does not exist';
                mysqli_free_result($result);
                mysqli_close($conn);
              } 

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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Log in</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
    </ul>
  </div>
</nav>
    <br>
    <div class="container well"> 
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" id="myinput" class="form-control" name="username" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" id="input" class="form-control" name="password" autocomplete="off">
        </div>
        <input type="submit" value="Login" class="form-control btn-primary" name="submit">
    </form>
    <br>
    <small>You will get redirected to your page automatically if the credentials are right</small>
    </div>
</body>
</html>