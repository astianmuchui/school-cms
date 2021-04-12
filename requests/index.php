<?php

  
    require '../admin/config.php';

    if(isset($_GET['id'])){
      require '../admin/config.php';
      $id = $_GET['id'];
      $query = "SELECT * FROM users WHERE users.user_id = $id";
      $result = mysqli_query($conn,$query);
      $post = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      mysqli_close($conn); 
      $student = $post['username'];
      if($post == true){

      //Validate form
      if(isset($_POST['request'])){
      require '../admin/config.php';
        $studentName = $_POST['student'];
        $requestType = $_POST['requesttype'];
        $requestSubject = $_POST['requestsubject'];
        $query = "INSERT INTO requests(name,type,subject) VALUES('$studentName','$requestType','$requestSubject')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo 'Request Made';
        }
    }


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
    <title>Make request</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Make Request</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
    </ul>
  </div>
</nav> 


<br> <br>
<div class="container">
<form action="./index.php?id=<?php echo $id;?>" method="post">
  <div class="form-group">
  <label>Name</label>
  <input type="text" name="student" value="<?php echo $post['username']?>"  class="form-control" required>
  </div>

    <div class="form-group">
        <label>Type of request</label>

            <select name="requesttype" class="form-control" id="">
            <option value="">--SELECT--</option>
            <option value="Assignment request">Assignment request</option>
            <option value="Exam request">Exam Request</option>
            </select>
    </div>
    <div class="form-group">
        <label>Subject </label>
        <select name="requestsubject" id="" class="form-control">
        <option value="all">--SELECT--</option>
        <option value="biology">Biology</option>
        <option value="chemistry">Chemistry</option>
        <option value="physics">Physics</option>
        <option value="maths">Mathematics</option>
        <option value="english">English</option>
        <option value="kiswahili">Swahili</option>
        <option value="technicals">Technicals</option>
        <option value="history">History</option>
        <option value="geography">Geography</option>
        <option value="relegious education">Relegious education</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="request" value="Make request" class="form-control btn btn-primary">
    </div>
</form>
</body>
</html>