<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <title>Admin panel</title>
</head>
<body>
    <header>
        <div class="title">
             School admin
        </div>
        <nav>
            <ul>
              <li><a href="#"><i class="fas fa-users-cog"></i>Admin</a></li>
              <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>  
            </ul>
        </nav>
    </header>
    <main>
    <div class="sidebar">
        <ul>
            <li><a href="#" class="header" id="wheel"><i class="fas fa-cog fa-3x" ></i></a></li>
            <li><a href="./pages/students database/"><i class="fas fa-school"></i> View students database</a></li>
            <li><a href="./pages/add exam/"><i class="fas fa-file"></i> New exam</a></li>
            <li><a href="./pages/add assignment/"><i class="fas fa-file"></i> New Assignment</a></li>
            <li><a href="./pages/suggestions/"><i class="fas fa-box"></i> Suggestions box</a></li>
            <li><a href="./pages/questions/"><i class="far fa-question-circle"></i> Asked questions</a></li>
            <li><a href="./pages/register teacher/"><i class="fas fa-chalkboard-teacher"></i> New teacher</a></li>
            <li><a href="./pages/teachers/"><i class="fas fa-users"></i> Registered teachers</a></li>
            <li><a href="./pages/requests"><i class="fas fa-question-circle"></i> View requests</a></li>
            <li><a href="./pages/blog/"><i class="fas fa-blog"></i> New Post  </a></li>
            <li><a href="./pages/myposts/"><i class="fas fa-blog"></i> My posts</a></li>
            <li><a href="./pages/inbox/"><i class="fas fa-inbox"></i> Received Messages</a></li>
            <li><a href="./pages/Newsletter/"><i class="far fa-share-square"></i> Message all students</a></li>
            <li><a href="./pages/message teachers/"><i class="far fa-share-square"></i> Message all Teachers</a></li>
            <li><a href="./pages/contact/"><i class="fas fa-envelope"></i> Message Individual student</a></li>
        </ul>
    </div>


    <div class="statistics">
        <h1>System overview</h1>
        <div class="grid-container">
            <div class="grid-item">
                <h5>Users</h5>
                <small>5</small>
            </div>
            <div class="grid-item">
                <h5>Teachers</h5>
                <small>5</small>
            </div>
            <div class="grid-item">
                <h5>Pages</h5>
                <small>6</small>
            </div>
            <div class="grid-item">
                <h5>Uploaded Assignments</h5>
                <small>6</small>
            </div>
            <div class="grid-item">
                <h5>Uploaded Exams</h5>
                <small>2</small>
            </div>
            <div class="grid-item">
                <h5>Suggestions</h5>
                <small>3</small>
            </div>
            <div class="grid-item">
                <h5>Received messages</h5>
                <small>2</small>
            </div>
            <div class="grid-item">
                <h5>Requests</h5>
                <small>2</small>
            </div>
            <div class="grid-item">
                <h5>Asked questions</h5>
                <small>5</small>
            </div>
        </div>
    </div>
</main>

    <script src="../javascript/font_awesome_main.js"></script>
</body>
</html>