<?php 
    require '../../config.php';
    require '../../checkers/check.php';

    $query = "SELECT * FROM questions ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $questions = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
    <title>Questions</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Asked Questions</a>
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
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">
<br> <br>
<?php foreach($questions as $question):?>
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><?php echo $question['username']?></li>
  <li class="breadcrumb-item active"><?php echo $question['qtn']?>?</li> 
 
  <li class="breadcrumb-item active"><?php echo substr($question['time'],0,16);?></li>
  <li class="breadcrumb-item active"><a href="mailto:<?php echo $question['user_email']?>" class="btn btn-primary">Reply</a></li>
</ol>
<?php endforeach;?>

</div>
</body>
</html>