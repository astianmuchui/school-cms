<?php 
    require '../../config.php';
    require '../../checkers/check.php';
    $query = "SELECT * FROM requests ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $requests = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
    <title>My requests</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Posted Requests</a>
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

<br> <br>
 <div class="container">
      <?php foreach($requests as $request):?>
  <div class="card border-info mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo $request['type']?></div>
            <div class="card-body">
                <h4 class="card-title">Subject : <?php echo $request['subject'];?></h4>
                    <p class="card-text">By : <?php echo $request['name'];?> </p>
                   <small>Time posted : <?php echo substr($request['time'],0,16);?></small> 
        </div>
    </div>
    <?php endforeach;?>
    </div>

</body>
</html>