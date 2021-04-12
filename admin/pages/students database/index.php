<?php

    require '../config.php';
    require '../../checkers/check.php';
    $query = 'SELECT * FROM users';
     $result = mysqli_query($conn,$query);
     $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
     mysqli_free_result($result);
     mysqli_close($conn); 

     if(isset($_POST['submit'])){
      header("Location: ./search.php");  
      $_SESSION['name'] = $_POST['user'];
        

     } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Students Database</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Students Database</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Back to panel
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ht#"></a>
      </li>
      
    </ul>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="user" required>
      <input class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit" value="Search">
    </form>
  </div>
</nav>


<div class="jumbotron">
    <table class="table table-bordered">
        <tr>
            <th>Index</th>
            <th>database id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Adm no</th>
            <th>Portal link</th>
            <th>Password</th>
            <th>Time registered</th>
            <!-- <th>Time registred</th> -->
        </tr>
        <tr>
            <?php $c=0;$c++;?>
            <?php foreach($users as $user):?>
                <?php $standardTime = substr($user['created_at'],0,16); ?>
                <?php $portalURL = '../../../portals/'.$user['username'];?>
            <td><?php echo $c; $c++;?></td>
            <td><?php echo $user['user_id'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['user_mail']?></td>
            <td><?php echo $user['adm_no'];?></td>
            <td><a href="<?php echo $portalURL;?>" class="btn btn-light">Visit portal</a></td>
            <td><?php echo $user['passcode'];?></td>
            <td><?php echo $standardTime;?></td>
            
        </tr>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>