<?php
     function signup($name,$adm,$password){
        //Ensuring the length of the student Id number.
        if(strlen($adm)>5){
            echo "<script>window.prompt('Please enter student Id below 5 characters');</script>";
        }else{
            //No problem here
        }
        if(strlen($name)>20){
            echo "<script>window.prompt('Name cannot exceed 20 characters');</script>";
        }
        $query = "INSERT INTO users (username,adm_no,passcode) VALUES('$name',$adm,$password)";
        include '../server/database.php';
        $action = mysqli_query($conn,$query);  
        if($action){
            require '../server/rdr.php';
            $rdr_one = header("Location: ../portals/$name");

        } else{
            echo 'could not sign up';
        }
    }
    if(isset($_POST['start'])){
        // require '../server/functions.php';
        $name = $_POST['name'];
        $adm = $_POST['adm'];
        $password = $_POST['pin'];
        signup($name,$adm,$password);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign Up now</title>
</head>
<body>
<header>
        <div class="title">
            Sign Up
        </div>
        <nav>
            <ul>

                
            </ul>
        </nav>
    </header>
    <div class="form-container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label>Name</label> <br> <br>
            <input type="text" name="name" required > <br> <br>
            <label>Admission Number</label> <br> <br>
            <input type="number" name="adm" required> <br> <br>
            <label>Password</label> <br> <br>
            <input type="number" name="pin" required> <br> <br>
            <input type="submit" value="Sign Up" name="start">
        </form>
    </div>
</body>
</html>