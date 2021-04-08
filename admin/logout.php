<?php
    session_start();
    $_SESSION['id'] = NULL;
    
    header("Location: ./login.php?logged_out");

?>