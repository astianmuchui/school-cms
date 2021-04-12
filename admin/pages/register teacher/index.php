<?php
    require "../config.php";
    require '../../checkers/check.php';
    if(isset($_POST['register'])){
        $teacher = $_POST['teacher'];
        $teacherEmail = $_POST['email'];
        $distinction = $_POST['distinction'];
        $query = "INSERT INTO teachers(username,email,distinction) VALUES('$teacher','$teacherEmail','$distinction')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo 'Teacher Registered';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Add Teacher</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">New Teacher</a>
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
      
    </ul>
  </div>
</nav> 


<br> <br>
<div class="container">
<form action="./index.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="form-group">
  <label>Name</label>
  <input type="text" name="teacher" class="form-control" required>
  </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Distinction</label>
            <select name="distinction" class="form-control" id="">
            <option value="Senior Teacher">Senior Teacher</option>
            <option value="Head of department">Head of Department</option>
            <option value="Normal Teacher">Normal Teacher</option>
            <option value="Form Master">Form Master</option>
            <option value="Club patron">Club patron</option>
            </select>
    </div>
    <div class="form-group">
        <input type="submit" name="register" value="Add teacher" class="form-control btn btn-primary">
    </div>
</form>
</div>
</body>
</html>