<?php
        require '../config.php';
        $query = 'SELECT * FROM users';
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 


         function Newsletter($title,$message){
            require '../config.php';
            $query = 'SELECT * FROM users';
             $result = mysqli_query($conn,$query);
             $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
             mysqli_free_result($result);
             mysqli_close($conn); 
             $schoolEmail = "school@school.com";
             $schoolName = "School";
             $headers = "from:".$schoolName."<".$schoolEmail.">"."\r\n";
             $subject = $title;   
             foreach($users as $user):
                $toEmail = $user['user_mail'];
              $nws = mail($toEmail,$subject,$message,$headers);
              set_time_limit(0);
              flush();
                if($nws){
                    return true;
                }else{
                    return false;
                }
            endforeach;
         }

    if(isset($_POST['send'])){
        $title = $_POST['title'];
        $message = $_POST['message'];

        require '../config.php';
        $query = "INSERT INTO newsletters (`title`,`message`)  VALUES('$title','$message')";
        $action = mysqli_query($conn,$query);
        if($action){
            echo "Server is processing Request";
            Newsletter($title,$message);    
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
    <title>Newsletter</title>
</head>
<body>

<div class="h">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Newsletter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#MyEmails">Current Added Emails</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#send">Send Message</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<style>
    
.h{
    position: sticky;
    top: 0;
    z-index: 999;
}
*{
    scroll-behavior: smooth;
}
</style>
<br>



    <div class="container" id="MyEmails">
    <div class="jumbotron">
    <table class="table table-bordered">
        <h3>Current Emails In the Database</h3>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Email</th>
            <th>Time registered</th>
        </tr>
        <tr>
            <?php $c=0;$c++;?>
            <?php foreach($users as $user):?>
                <?php $standardTime = substr($user['created_at'],0,16); ?>
                <?php $portalURL = '../../../portals/'.$user['username'];?>
            <td><?php echo $c; $c++;?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['user_mail']?></td>
            <td><?php echo $standardTime;?></td>
            
        </tr>
        <?php endforeach;?>
    </table>

    </div>

<br>
<div class="container jumbotron" id="send">
    <h3>Write Email</h3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" id="" class="form-control" required>
</div>
<div class="form-group">
            <label>Message</label>
            <textarea name="message" required id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" value="Send Message"  class="form-control btn bg-dark text-white" required>
        </div>
        </form>
    </div>

</body>
</html>