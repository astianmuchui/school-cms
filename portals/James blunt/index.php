
            <?php
                require "../../server/db_pure.php";
        
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="../../javascript/font_awesome_main.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="../../css/temp.css">
                <title>James blunt | Portal</title>
            </head>
            <body>
                <header>
            
                    <div class="title">
                        School name
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#"><img src="../../images/avatar.png" alt="" width="30px" height="30px"></a></li>
                            <li><a href="#">James blunt</a></li>
                             <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>   

                            
                        </ul>
                    </nav>
                </header>
                <div class="sidebar">
                    <div class="id">
                        <img src="../../images/avatar.png" alt="" width="100px" height="100px">
                        <h5>James blunt</h5>
                    </div> <br> <br><br>
                    <div class="status">
                        <div></div>
                        <h6>Online</h6>
                    </div>
                    <div class="details">
                       <span>Adm no:</span>
                        <h3> 12688</h3>
                    </div>
                    <div class="back">
                    <a href="#">  Go  back to website <i class="fas fa-arrow-right"></i></a>
                </div> <br> <br>
                <div class="back">
                    <a href="#">Received Messages</a>
                </div> <br> <br>
                <div class="back">
                    <a href="../../suggestions?id=16">Make suggestion</a>
                </div>
                </div>
                <div class="panel">
                    <div class="welcome">
                        <h2>Welcome ,James blunt</h2>
                    </div>
                    <div class="cards-container">
                        <div class="card">
                            <p>Email Adress</p>

                            <small>jamesblunt@gmail.com</small>
                            <a href="../../control/edit_email.php?id=16">change</a>
                        </div>
                        <div class="card">
                            <p>Available Assignments</p>
                            <small><?php require "../../server/assignment_numbers.php";?></small>
                            <a href="../../assignments/">View</a>
            
                        </div>
                        <div class="card">
                            <p>Extra Exams</p>
                            <small><?php require"../../server/exam_numbers.php";?></small>
                            <a href="../../exams">View</a>
                        </div>
                        
                        
                    </div>
                </div>
            
            </body>
            </html>