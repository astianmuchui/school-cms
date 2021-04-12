<?php 
    require '../config.php';
    require '../../checkers/check.php';
    $query = "SELECT * FROM teachers";
    $result = mysqli_query($conn,$query);
    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    //Check for submit




    if(isset($_POST['send'])){
       require '../config.php';
        $head = $_POST['heading'];
        $message = $_POST['message'];
        if(empty($message) || empty($head)){
            echo "All fields must be filled";
        }

        if(!empty($message) && !empty($head)){
            $query = "INSERT INTO newsletter (`heading`,`body`) VALUES('$head','$message')";
            $action = mysqli_query($conn,$query);
            if($action){
                function MessageTeachers(){
                    $head = $_POST['heading'];
                    $message = $_POST['message'];
      
                    require '../config.php';
                    $query = "SELECT * FROM teachers";
                    $result = mysqli_query($conn,$query);
                    $teachers = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    mysqli_free_result($result);
                    mysqli_close($conn);
            
            
                    $subject = $head;
                    $body = $message;
                    $schoolName = "";
                    $schoolEmail = "";
                    $header = "From:".$schoolName."<".$schoolEmail.">"."\r\n";
            
                    foreach($teachers as $teacher):
                        $toEmail = $teacher['email'];
                        mail($toEmail,$subject,$body,$header);
                        set_time_limit(0);
                        flush();
                        
                    endforeach;
                }
                echo "Server is processing request";
                MessageTeachers();
            
                
            }
        }

    }





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>Teachers Newsletter</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Teachers Newsletter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Available Teachers </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Write Message</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<br> <br>

<table class="container table table-bordered bg-light">

    <tr>
        <th>Index</th>
        <th>Database id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Distinction</th>
        <th>Registered on</th>
    </tr>
    <?php $c=0; $c++;?>
    <?php foreach ($teachers as $teacher):?>
        <tr>
        <td><?php echo $c; $c++;?></td>
        <td><?php echo $teacher['id'];?></td>
        <td><?php echo $teacher['username'];?></td>
        <td><?php echo $teacher['email']; ?></td>
        <td><?php echo $teacher['distinction'];?></td>
        <td><?php echo substr($teacher['time'],0,16);?></td>    
        </tr>
        <?php endforeach;?>
</table>
        <br> <br>
        <div class="container">
        <h4>Write Message</h4>
        <form action="./index.php?id=<?php echo $_GET['id'];?>" method="post">
            <div class="form-group">
            <label>Title</label>
            <input type="text" name="heading" id="" class="form-control">
            </div>
            <div class="form-group">
            <label>Message</label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
            <input type="submit" name="send" value="Send Message" class="form-control btn btn-light">
            </div>
        </form>
        </div>




</body>
</html>