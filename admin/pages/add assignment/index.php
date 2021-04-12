<?php    
    require '../config.php';
    require '../../checkers/check.php';
    $errors = array();
    function insert($title,$document){
        global $errors,$conn;        
        if(empty($title)){
            array_push($errors,"Title Required");
        }
        if(empty($document)){
            array_push($errors,"Document Required");
        }
        if(count($errors) == 0){
            if(!empty($document)){
                $folder = '../../assignments/';
                $filename = basename($document);
                $file_path = $folder.$filename;
                $extension  = pathinfo($file_path, PATHINFO_EXTENSION);
                $formats = array('pdf','docx','zip','txt','rar');
                $doc = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                $tmp_name = $_FILES['pdf']['tmp_name'];
                if(in_array($extension,$formats)){
                    if(move_uploaded_file($tmp_name,$file_path)){
                        include '../config.php';
                        $query = "INSERT INTO assignments (title, doc_file) VALUES('$title','$filename')";
                        $action = mysqli_query($conn,$query);  
                        if($action){
                            echo 'Uploaded succesfully';
                        }else{
                            echo 'Failed to add assignment';
                            return false;
                        }
                    }else{
                        echo 'Failed operation';
                    }
                }else{
                    array_push($errors,"Could not complete request");
                    echo 'Invalid file format';
                }
            }else{
                echo 'Document Required';
            }
        }else{
            print_r($errors);
            return false;
        }
    }
    if(isset($_POST['upload'])){
        //get form data
        $title = $_POST['title'];
        //get document
        $document = $_FILES['pdf']['name'];
        //call function to insert
        insert($title,$document);
        require('../../../handlers/assignment_mail.php');
        // NotifyStudents();
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
    
    <title>Add assignment</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Add Assignment</a>
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
        <a class="nav-link" href="../../../assignments/">Assignments Page</a>
      </li>
      
    </ul>
  </div>
</nav>
    <br> <br>
        <center class="container">  
        <form action="./index.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" >
            <div class="form-group">
            <label>Assignment Title</label> 
            <input type="text" name="title" class="form-control"> 
            </div>
            <div class="form-group">
            <label>File</label>
            <input type="file" class="form-control" name="pdf" id="file"> 
            </div>
            <div class="form-group">
            <input type="submit" value="Upload" name="upload" class="form-control btn btn-primary">
            </div>
        </form>
        </center>
</body>
</html>