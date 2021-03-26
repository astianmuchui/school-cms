<?php
    require '../admin/config.php';
    $query = 'SELECT * FROM exams';
    $result = mysqli_query($conn,$query);
    $exams = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn); 
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exams.css">
    <title>Exams</title>
</head>
<body>
<header>
        <div class="title">
            Available exams
        </div>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>
    <div class="assignments-container">
        <div class="grid-container">
            <?php foreach($exams as $exam): ?>
                <?php $exam_URL = '../admin/exams/'.$exam['exam_file']; ?>
            <div class="grid-item">
                <h3><?php echo $exam['exam_name'] ?></h3> <br>
                <img src="../images/pdf-removebg-preview.png" alt="" height="100" width="100"> <br>
                    <div class="border"></div> <br>
                <a href="<?php echo $exam_URL; ?>" download>Download</a> <br>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>