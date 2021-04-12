<?php    
    require '../config.php';
    require '../../checkers/check.php';
    $errors = array();
    function addExam($exam_name,$exam_document){
        global $errors,$conn;
        if(empty($exam_name)){
            echo 'Exam Name required<br>';
        }
        if(empty($exam_document)){
            echo 'Document required<br>';
        }
        if(count($errors)==0){
            if(!empty($exam_document)){
                $folder = '../../exams/';
                $file_name = basename($exam_document);
                $file_path = $folder.$file_name;
                $file_extension = pathinfo($file_path,PATHINFO_EXTENSION);
                $allowed_formats = array('pdf','docx','txt','zip','rar');
                $doc = addslashes(file_get_contents($_FILES['exam_document']['tmp_name']));
                $tmp_name = $_FILES['exam_document']['tmp_name'];
                if(in_array($file_extension,$allowed_formats)){
                    if(move_uploaded_file($tmp_name,$file_path)){
                        include "../config.php";
                        $query = "INSERT INTO exams (exam_name,exam_file) VALUES('$exam_name','$file_name')";
                        $action = mysqli_query($conn,$query);
                        if($action){
                            echo "Exam added succesfuly<br>";
                        }else{
                            echo "Exam not added <br>";
                        }
                    }else{
                        echo "There was an error<br>";
                    }

                }else{
                    echo "Invalid file format<br>";
                }
            }else{
                echo "File required<br>";
            }
        }else{
            array_push($errors,"Error");
        }
    }
    if(isset($_POST['add'])){
        $exam_name = $_POST['exam_title'];
        $exam_document = $_FILES['exam_document']['name'];
        addExam($exam_name,$exam_document);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Add exam</title>
</head>
<body>
    <div class="header-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Add Exam</a>
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
      <li class="nav-item">
        <a class="nav-link" href="../../../exams/">Exams page</a>
      </li>
     
    </ul>
  </div>
</nav>
    </div>

<br>
        <center class="container">
        <form action="./index.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label>Exam title</label> <br><br>
                <input type="text" name="exam_title" class="form-control"> 
            </div>  
        <div class="form-group">
        <label for="price">File</label> <br><br>
            <input type="file" name="exam_document" id="file" class="form-control"> 
            
        </div>
            <div class="form-group">
            <input type="submit" value="+ add exam" name="add" class="btn btn-primary form-control">
            </div>
            
        </form>
        </center>
      
       

</body>
</html>