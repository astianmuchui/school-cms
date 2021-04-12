<?php 
    require '../config.php';
    require '../../checkers/check.php';

    $errors = array();
    function upload($caption,$image){
        
        global $errors , $conn;
        
        if(empty($caption)){
            echo "Please add a caption";
        }
        if(empty($image)){
            echo "Please select an image";
        }
        if(count($errors) == 0){
           if(!empty($image)){
                $folder = "../../gallery/";
                $filename = basename($image);
                $path = $folder.$filename;
                $extension = pathinfo($path,PATHINFO_EXTENSION);
                $formats = array('jpg','jpeg','png','webp');
                $photo = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $tmp_name = $_FILES['image']['tmp_name'];
             if(in_array($extension,$formats)){
                if(move_uploaded_file($tmp_name,$path)){
                    include '../config.php';
                    $query = "INSERT INTO gallery (`caption`,`image`) VALUES('$caption','$filename')";
                    $action = mysqli_query($conn,$query);
                    if($action){
                        echo "Image added <br>";
                    }else{
                        echo "Image not added <br>";
                    }
                }else{
                    echo "There was an error <br>";
                }
           
                }else{
                  echo "Invalid file format <br>";
                }
            }else{
                echo "File required <br>";
            }
        }else{
            echo "Error";
        }
    }


    if(isset($_POST['add'])){
        $caption = $_POST['caption'];
        $image = $_FILES['image']['name'];

        upload($caption,$image);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Add to gallery</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Add to gallery</a>
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

        <h2>Add to gallery</h2>
    <form action="./index.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label>Caption</label> <br><br>
                <input type="text" name="caption" class="form-control"> 
            </div>  
        <div class="form-group">
        <label for="price">Photo</label> <br><br>
            <input type="file" name="image" id="file" class="form-control"> 
            
        </div>
            <div class="form-group">
            <input type="submit" value="+ add to gallery" name="add" class="btn btn-primary form-control">
            </div>
            
        </form>
    </div>


</body>
</html>