<?php
    require '../admin/config.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE users.user_id = $id";
        $result = mysqli_query($conn,$query);
        $post = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn); 
        // echo $post['usernname'];
        $username = $post['username'];
        $usermail  = $post['user_mail'];
        if(isset($_POST['edit'])){
        $newEmail = $_POST['newEmail'];
        require '../admin/config.php';
        $query = "UPDATE `users` SET `user_mail` = '$newEmail' WHERE `users`.`user_id` = $id";
        $change =  mysqli_query($conn,$query);
        if($change){
            if(require '../server/update_profile.php'){
                header("Location: ../portals/$username");
            }
            
            // echo "Email changed ,Please Wait as we edit your profile";
        }else{
            return false;
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
    <title>Edit Email</title>
</head>
<body class="well" style="height: 100vh;">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">School name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Welcome ,<?php echo $post['username'];?>
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../portals/<?php echo$post['username']?>">Back home</a>
      </li>
    </ul>
  </div>
</nav>
    <br> <br>
        <div class="container jumbotron">
        <form action="edit_email.php?id=<?php echo $id; ?>" method="post">
     <div class="form-group">
         <label>Enter New Email</label>
            <input type="email" name="newEmail" id="" placeholder="Enter new email here" class="form-control" required value="<?php echo $usermail; ?>"> 
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-primary" name="edit">
        </div>
     
        
    </form> 
        </div>   
          

</body>
</html>