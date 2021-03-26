<?php
    require '../admin/config.php';
    $query = 'SELECT * FROM assignments';
    $result = mysqli_query($conn,$query);
    $assignments = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn); 
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/assignments.css">
    <title>Assignments</title>
</head>
<body>
<header>
        <div class="title">
            Available assignments
        </div>
        <nav>
            <ul>
            <!-- <li><a href="./login/index.php">Login</a></li> -->
                <!-- <li><a href="#">Sign Up</a></li> -->
                
            </ul>
        </nav>
    </header>
    <div class="assignments-container">
        <div class="grid-container">
            <?php foreach($assignments as $assignment): ?>
                <?php $doc_URL = '../admin/assignments/'.$assignment['doc_file']; ?>
            <div class="grid-item">
                <h3><?php echo $assignment['title'] ?></h3> <br>
                <img src="../images/pdf-removebg-preview.png" alt="" height="100" width="100"> <br>
                    <div class="border"></div> <br>
                <a href="<?php echo $doc_URL; ?>" download>Download</a> <br>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>