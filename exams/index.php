<?php
    require '../admin/config.php';
    $query = 'SELECT * FROM exams ORDER by id desc';
    $result = mysqli_query($conn,$query);
    $exams = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn); 
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/exams.css">
    <title>Exams</title>
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
        <a class="nav-link" href="#">Request Exam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Assignments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ask a Question</a>
      </li>
      
    </ul>

  </div>
</nav>
      <br>
    <div class="assignments-container jumbotron">
        <div class="grid-container ">
            <?php foreach($exams as $exam): ?>
                <?php $exam_URL = '../admin/exams/'.$exam['exam_file']; ?>

            <div class="card bg-dark mb-3" style="max-width: 20rem;">
            <div class="card-header"><?php echo $exam['exam_name']?></div>
            <div class="card-body">
            <img src="../images/1200x630wa-removebg-preview.png" alt="" height="181" width="345"> 
            <a class="card-text btn btn-light" href="<?php echo $exam_URL; ?>" download>Download</a>
            </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>