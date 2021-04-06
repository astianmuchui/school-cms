<?php
    require '../admin/config.php';
    $query = 'SELECT * FROM assignments ORDER BY id desc';
    $result = mysqli_query($conn,$query);
    $assignments = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn); 
    
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }
    function track(){
      include '../admin/config.php';
      global $conn,$id;
          
          $query = "SELECT * FROM users WHERE users.user_id = $id";
          $result = mysqli_query($conn,$query);
          $post = mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          mysqli_close($conn);

          

    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/assignments.css">
    <title>Assignments</title>
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
        <a class="nav-link" href="#">Back Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Request Assignment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Exams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../questions/">Ask a Question</a>
      </li>
      
    </ul>

  </div>
</nav> 
   <div class="container">
        <div class="grid-container">
            <?php foreach($assignments as $assignment): ?>
                <?php $doc_URL = '../admin/assignments/'.$assignment['doc_file']; ?>

        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header"><?php echo $assignment['title'] ?></div>
                <div class="card-body">
                <img src="../images/1200x630wa-removebg-preview.png" alt=""height="181" width="345"> <br>
                   
                <p class="card-text"><a href="<?php echo $doc_URL; ?>" class="btn btn-light" download>Download</a></p>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>