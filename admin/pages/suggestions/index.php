<?php
    require '../config.php';
    require '../../checkers/check.php';

    $query = "SELECT * FROM suggestions ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $suggestions = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
    <title>Suggestions Box</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Suggestions box</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../">Back Home
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
<div class="grid container">
<?php foreach($suggestions as $suggestion):?>
    <div class="card bg-secondary mb-3" style="max-width: 20rem;">
    
        <div class="card-header">Suggestion</div>
        <div class="card-body">
        <h4 class="card-title">Authored by <?php echo $suggestion['publisher']; ?></h4>
        <p class="card-text"><?php echo $suggestion['content'];?></p>
        <small>Pubished on <?php echo $suggestion['time']; ?></small> <br> <br>
        <a href="./view.php?id=<?php echo $suggestion['publisher'];?>" class="btn bg-dark text-white">View student</a>
  </div> <br>
  
</div>
<?php endforeach;?>  
</div>

</body>
</html>