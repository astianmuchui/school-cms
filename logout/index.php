<?php
    session_start();
    $_SESSION['url_id'] = NULL;
    header("Location: ../login/?logged_out");
    
?>