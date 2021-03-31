<?php
     function signup($name,$adm,$password,$email){
        //Ensuring the length of the student Id number.
        if(strlen($adm)>5){
            echo "<script>window.prompt('Please enter student Id below 5 characters');</script>";
        }else{
            //No problem here
        }
        if(strlen($name)>20){
            echo "<script>window.prompt('Name cannot exceed 20 characters');</script>";
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //No problem here
        }else{
            echo "<script>window.prompt('use a valid email')</script>";
        }
        $query = "INSERT INTO users (username,adm_no,user_mail,passcode) VALUES('$name','$adm','$email','$password')";
        include '../server/database.php';
        $action = mysqli_query($conn,$query);  
        if($action){
            require '../server/functions.php';
            $rdr_one = header("Location: ../portals/$name");

        } else{
            echo 'could not sign up';
            
        }
    }
    if(isset($_POST['start'])){
        $name = $_POST['name'];
        $adm = $_POST['adm'];
        $password = $_POST['pin'];
        $email = $_POST['email'];
        signup($name,$adm,$password,$email);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Sign Up now</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">signup</a>
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

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
          <div class="form-group">
          <label>Name</label> <br> <br>
            <input type="text" name="name" class="form-control" required > 
          </div>
          <div class="form-group">
          <label>Admission Number</label> 
            <input type="number" name="adm" class="form-control" required> 
          </div>
          <div class="form-group">
          <label>Email</label>
            <input type="email" name="email" class="form-control" required> 
          </div>
          <div class="form-group">
          <label>Password</label>
            <input type="number" name="pin" class="form-control" required> 

          </div>
          <div class="form-group">
          <input type="submit" value="Sign Up" name="start" class="form-control btn btn-primary">          
          </div>
           
        </form>
    </div>
    <center>
        <div class="login-link">
        <span>Already a user?</span> <a href="../login/">Login</a>
        </div>
    </center>
</body>
</html>