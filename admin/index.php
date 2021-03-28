<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/font_awesome_main.js"></script>
    <title>Admin | </title>
</head>
<body>
  <div class="header-container bg-dark">
    <div class="title navbar-brand " href="#"> <i class="fas fa-cog fa-3x"></i>School Admin</div> 
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-primary" id="open" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Manage school</a>
                    <div class="dropdown-menu" id="dropdown">
                      <a class="dropdown-item" href="#" id="exams_opener">Manage exams</a>
                      <a class="dropdown-item" href="#" id="assignments_opener">Manage Assignments</a>
                      <a class="dropdown-item" href="#">View Students database</a>
                      <a class="dropdown-item" href="#">Message students</a>
                      <a class="dropdown-item" href="#"></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item bg-dark text-white" href="#" style="font-size: large; text-align: center; " id="close">  &times;</a>
                    </div>
                  </li>
          </ul>
        </div>
      </nav>

  </div>
      
    <div class="card text-white bg-info mb-3 items" style="max-width: 20rem;">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
        <div class="card-header">Users
            <span class="badge badge-primary badge-pill"><?php require "../server/count_users.php";?></span>
        </div>
        <div class="card-header">Pages
            <span class="badge badge-primary badge-pill">6</span>
        </div>
        <div class="card-header">Assignments
            <span class="badge badge-primary badge-pill"><?php require "../server/assignment_numbers.php";?></span>
        </div>
        <div class="card-header">Extra Exams
            <span class="badge badge-primary badge-pill"><?php require "../server/exam_numbers.php"; ?></span>
        </div>
        <div class="card-header">Received Messages
            <span class="badge badge-primary badge-pill">0</span>
        </div>
        </div>
      </div>
      <div class="left-card" id="left-card">
        <div class="exams_container" id="exams_container"><?php require "./add_exam.php"; ?>  </div> 
       </div>
      <!-- <script src="../javascript/switch.js"></script> -->
      <script src="../javascript/open_dropdown.js"></script>
</body>
</html>