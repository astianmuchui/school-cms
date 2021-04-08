<?php
        //Gate authentication mechanism 
     session_start();
    $id =  rand(500,50000);
    $_SESSION['id'] = $id;
    $password = 12345;
    $username = "ldss-Admin";

    function redirect(){
        global $username,$password,$id;
        switch ($password) {
            case 12345:
                
            header("Location: ./index.php?id=$id");
            break;

            default : 
            echo ".";
        }
    }

    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $safe = $_POST['password'];

        if(($username == $name ) && ($safe == $password)){
            
            redirect();

        }else{
            echo "Wrong credentials";
        }
    }    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login into your cpanel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin | Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
      
    </ul>
  </div>
</nav>
    <br>
    <div class="container well"> 
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="username" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off">
        </div>
        <input type="submit" value="Login" class="form-control btn-primary" name="submit">
    </form>
    </div>
</body>
</html>