<?php
        require '../config.php';
        require '../../checkers/check.php';

        $errors = array();

        function post($title,$image,$content,$author){
            global $errors,$conn;
            if(empty($title)){
                array_push($errors,"Please Add The title");
            }
            if(empty($image)){
                array_push($errors,"Please post an Image");
            }
            if(empty($content)){
                array_push($errors,"Please add some content");
            }
            if(empty($author)){
                array_push($errors,"Please Write the author of this post");
            }
            if(count($errors) == 0){
                if(!empty($image)){
                    $folder = '../../posts/';
                    $filename = basename($image);
                    $filepath = $folder.$filename;
                    $fileExtension = pathinfo($filepath,PATHINFO_EXTENSION);
                    $allowedFormats = array("jpg","jpeg","png","webp");
                    $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $tmp_name = $_FILES['image']['tmp_name'];
                    if(in_array($fileExtension,$allowedFormats)){
                           if(move_uploaded_file($tmp_name,$filepath)){
                                include '../config.php';
                           $query = "INSERT INTO blogposts(`title`,`image`,`content`,`author`) VALUES('$title','$image','$content','$author')";
                           $action = mysqli_query($conn,$query);
                           if($action){
                                echo "Posted";
                           }else{
                               echo "Not posted";
                           }
                        } else{
                            echo "There was a problem handling the image";
                     }

                    }else{
                        echo 'Invalid file format';
                    }
                }else{
                    echo "Image required";
                }
            }else{
                print_r($errors);
                return false;
            }
        }
        if(isset($_POST['create'])){
            $title = $_POST['post_title'];
            
            $content = $_POST['post_content'];
            $author = $_POST['post_author'];
            $image = $_FILES['image']['name'];
            post($title,$image,$content,$author);
            
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Admin | Add to blog</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Make Post</a>
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


    <div class="container">
        <form action="./index.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title of post</label>
                <input type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" id="file">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="post_content" id="" cols="20" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="post_author" id="" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Post" name="create" class="form-control btn btn-primary">    
            </div>
        </form>

    </div>
</body>
</html>