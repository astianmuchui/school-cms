<?php
    require '../config.php';
    require '../../checkers/check.php';

    $query = "SELECT * FROM blogposts ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
    <title>My blogposts</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My posts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
    </ul>
  </div>
</nav> 

<br>
<style>
            /* .grid{
                width: 100%;
                display: inline-grid;
                grid-template-columns: repeat(4,1fr);
                grid-gap: 10px;
            }
            .grid div{
                height: 90vh;
            } */
        </style>

<div class="container grid">
<?php foreach($posts as $post): ?>
<div class="card mb-3 bg-light">
  <h3 class="card-header"><?php echo $post['title'];?></h3>
  <div class="card-body">
    <h5 class="card-title">By - <?php echo $post['author'];?></h5>
  </div>
    <?php $imgURL = "../../posts/".$post['image'];?>
    <img src="<?php echo $imgURL;?>" alt="">
  <div class="card-body">
    <p class="card-text"><?php echo $post['content'];?></p>
    <small>Published on <?php echo substr($post['created_at'],0,16);?></small>
  </div>

</div>
    <?php endforeach;?>
</div>

</div>
</body>
</html>