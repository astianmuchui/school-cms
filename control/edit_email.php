<?php
    //Edit Email
    require '../admin/config.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE users.user_id = $id";
        $result = mysqli_query($conn,$query);
        $post = mysqli_fetch_all($result,MYSQLI_ASSOC);

        mysqli_free_result($result);
        mysqli_close($conn); 
    

    if(isset($_POST['edit'])){
        $newEmail = $_POST['newEmail'];
        require '../admin/config.php';
        $query = "UPDATE `users` SET `user_mail` = '$newEmail' WHERE `users`.`user_id` = $id";
        $change =  mysqli_query($conn,$query);
        if($change){
            echo "Email changed";
        }else{
            return false;
        }
        
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Edit Email</title>
</head>
<body class="bg-primary">
    <center>  
        <div class="container">
        <form action="edit_email.php?id=<?php echo $id; ?>" method="post">
     <div class="form-group">
         <label>Enter New Email</label>
            <input type="email" name="newEmail" id="" placeholder="Enter new email here" class="form-control"> 
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-dark" name="edit">
        </div>
     
        
    </form> 
        </div>   
          
    </center>

</body>
</html>
