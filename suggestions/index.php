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

        //Validate form

          }else{
            header("Location: ../login/");
          }
        if(isset($_POST['publish'])){
        $suggestion = $_POST['suggestion'];
        require '../admin/config.php';
        $query ="INSERT INTO suggestions(publisher,content) VALUES('$student','$suggestion')";
        $action = mysqli_query($conn,$query);

        if($action){
          echo 'Suggestion published';
        }else{
          echo 'Suggestion not published';
        }
      }

    }else{
      header("Location: ../login");
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css//bootstrap.min.css">
    <title>Make A Suggestion</title>
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
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../portals/<?php echo $post['username']?>">Portal</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="jumbotron">

<form action="index.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
        <label>Write your suggestion ,Your Identity remains anonymous</label>
        <textarea name="suggestion" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="publish" value="Publish" class="form-control btn btn-primary">
    </div>
</form>
</div>
</body>
</html>