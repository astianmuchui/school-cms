<?php
    require '../admin/config.php';
    if(isset($_POST['ask'])){
        $studentName = $_POST['student'];
        $question = $_POST['question'];
        $email = $_POST['mail'];
        $query = "INSERT INTO questions (username,user_email,qtn) VALUES('$studentName','$email','$question')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo 'Question posted';
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
    <title> Ask Question</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">School Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Back Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../assignments/"> Assignments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../exams/">Exams</a>
      </li> 
    </ul>
  </div>
</nav> 

<br>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
  <label>Your Name</label>
  <input type="text" name="student" class="form-control" required>
  </div>
    <div class="form-group">
        <label>Your Email</label>
        <input type="email" name="mail" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Write your question</label>
        <textarea name="question" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="ask" value="Post question" class="form-control btn btn-primary">
    </div>
</form>
</div>
</body>
</html>