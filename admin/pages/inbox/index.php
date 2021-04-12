<?php
    require '../config.php';
    require '../../checkers/check.php';
    $query = "SELECT * FROM messages ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $messages = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
    <title>Inbox</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My inbox</a>
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
  
<style>
            .grid{
                width: 100%;
                display: grid;
                grid-template-columns: repeat(4,1fr);
                grid-gap: 10px;
            }
        </style>
<div class="container grid">
<?php foreach($messages as $message):?>
    <div class="card bg-warning text-white mb-3" style="max-width: 20rem;">
    
        <div class="card-header"> Message  </div>
        <div class="card-body">
        <h4 class="card-title">Written by <?php echo $message['name']; ?></h4>
        <p class="card-text">Body :  <?php echo $message['message'];?></p>
        <small> Sent <?php echo substr($message['sent_at'],0,16); ?></small> <br> <br>
        <a href="mailto: <?php echo $message['email'];?>?subject=Replying to your message sent earlier&body= hi <?php echo $message['name'];?>" class="btn btn-light">Reply</a>
  </div> <br>
  
</div>
<?php endforeach;?>  

</div>
</body>
</html>