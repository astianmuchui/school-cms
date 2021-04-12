<?php 
      require "../config.php";
      require '../../checkers/check.php';
      $query = 'SELECT * FROM teachers ORDER BY id desc';
      $result = mysqli_query($conn,$query);
      $teachers = mysqli_fetch_all($result,MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Registered teachers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
    </ul>
  </div>
</nav>
<br>
<style>
            .grid{
                width: 100%;
                display: inline-grid;
                grid-template-columns: repeat(4,1fr);
                grid-gap: 10px;
            }
        </style>
<div class="container grid">
    <?php foreach($teachers as $teacher):?>
        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
         <div class="card-header"><?php echo $teacher['username'];?></div>
        <div class="card-body">
        <p class="card-text">Distinction :<?php echo $teacher['distinction'];?></p>
        <small>Joined <?php echo substr($teacher['time'],0,16);?></small> <br> <br>
        <a href="mailto: <?php echo $teacher['email'];?>" class="btn btn-primary">Contact</a>
     </div>
    </div>
    <?php endforeach;?>
</div>

</body>
</html>