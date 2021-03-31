<?php
#Send email whenever a new assignment is uploaded
function NotifyStudents(){
    $subject  = 'New assignment alert';
    $schoolName = "";
    $schoolMail = "";
    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From: ".$schoolName."<".$schoolMail.">"."\r\n";
    $body = '
        <h1>New Assignment Alert</h1>
        <p>
         Please login into your student portal to view the new assignment and work on it
         Note that failure to do the assignment will call for disciplinary measures.
        </p>
    ';
    $date = date("d/m/y");
    $title  = "Assignment uploaded on $date";
    require '../config.php';


    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach ($users as $user):
    $studentEmail = $user['user_mail'];
      $mailAction = mail($studentEmail,$subject,$body,$headers);
      if($mailAction){
            $query = "INSERT INTO mail_records (title,mail_message) VALUES('$title','$body')";
            $action = mysqli_query($conn,$query);  
            return true;
      }else{
          return false;
      }
    endforeach;
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>