<?php
  
    require '../admin/config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM users WHERE users.user_id = $id";
        $result = mysqli_query($conn,$query);
        $post = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn); 
        $student = $post['username'];

      if($post == true){
        

        if(isset($_POST['submit'])){
        require '../admin/config.php';

          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $schoolEmail = "school@school.com";
          $schoolName = "Myschool";
          $subject = "Sent by student";  
          $headers = "From:".$name."<".$email.">"."\r\n";
          $body = '
          <h1>Contact request from '.$name.'</h1>
          <h6>'.$email.'</h6>
          <p>
          '.$message.'
          </p>
          ';
  
          $query = "INSERT INTO messages (`name`,`email`,`message`) VALUES('$name','$email','$message')";
          $action = mysqli_query($conn,$query);
          if($action){
              echo 'message sent';
              mail($schoolEmail,$subject,$body,$headers);
          }
      }


        //
      }else{
        header("Location: ../login/");
      }


        
  
    }else{
      header("Location: ../login/");

    }


      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Contact Us</a>
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

      </li>
    </ul>
  </div>
</nav>




<br> <br>


<div class="container">
    <form action="./index.php?id=<?php echo $id;?>" method="post">
        <div class="form-group">
            <label>Your Name</label>
            <input type="text" name="name" id="" value="<?php echo $post['username'];?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Your Email</label>
            <input type="email" name="email" required id="" value="<?php echo $post['user_mail'];?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" required id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Send Message"  class="form-control btn btn-primary" required>
        </div>
</form>

</div>
</body>
</html>