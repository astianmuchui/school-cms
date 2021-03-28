<?php
    function updatePortal(){
    require '../admin/config.php';
    require '../server/functions.php';
    $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn); 

        foreach($users as $user):
            $username = $user['username'];
            $adm_no = $user['adm_no'];
            $student_email = $user['user_mail'];
            $user_id = $user['user_id'];
            $portals = "../portals/$username";
            $files = glob($portals.'/*');
            foreach($files as $file):
                if(is_file($file)){
                    if(unlink($file)){
                    
                    }

                }
            endforeach;
            rmdir($portals);
        endforeach;
        createportal();
    }
    updatePortal();
?>