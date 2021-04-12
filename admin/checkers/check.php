<?php
    session_start();
    if(isset($_GET['id'])){
        if(($_GET['id'] == $_SESSION['id']) || (!empty($id) || ($id !== NULL))){
            //We passed
        }else{
            header("Location: ../../login.php");
        }
    }else{
        header("Location: ../../login.php");
    }

?>