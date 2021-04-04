<?php
    session_start();
    $name = $_SESSION['name'];

    require "../config.php";

    $query = "SELECT * FROM `users` WHERE `username` LIKE '$name'";
    $result = mysqli_query($conn,$query);
    $search = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
    
    if($search == false){
        echo '
        <div class="alert alert-dismissible alert-warning">
        <h4 class="alert-heading">Warning!</h4>
        <p class="mb-0">
        '.$name .' not found <br>
         <a href="../students database/index.php" class="alert-link  btn btn-light">Back home</a>.</p>
      </div>';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>You searched for <?php echo $name;?></title>
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
  </div>
</nav>
<br> <br>
<div class="jumbotron">

<table class="table table-bordered">
        <tr>
            <th>database id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Adm no</th>
            <th>Portal link</th>
            <th>Password</th>
            <th>Time registered</th>
            <!-- <th>Time registred</th> -->
        </tr>
        <?php
            $potalUrl = "../../../portals/".$search['username'];
        
        ?>
         <tr>
         <td><?php echo $search['user_id'];?></td>
         <td><?php echo $search['username'];?></td>
         <td><?php echo $search['user_mail']; ?></td>
         <td><?php echo $search['adm_no'];?></td>
         <td><a href="<?php echo $potalUrl;?>" class="btn btn-secondary">Visit portal</a></td>
         <td><?php echo $search['passcode'];?></td>
         <td><?php echo substr( $search['created_at'],0,16);?></td>
         </tr>   

</table>

</div>

</body>
</html>