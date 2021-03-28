A school management system that allows students to do the following:

  1 Create their personal profile
  
  2 Log into their profile
  
  3 Download Exams
  
  4 Download Assignments
  
  5 Make suggestions
  
  6 Receive Messages to their personal Email
  
  7 Edit their email adress
  
  
  ==================================================================
  
  It allows the admin to :
  
  1 Upload new exam
  
  2 Upload new assignment
  
  3 Message all students at once
  
  4 Message students individually
  
  
  
  
  ====================================================================
  
  
  How it works
  
  On the sign up page the student enters details into the database which are then fetched by ../server/functions.php
   A folder is created for each student using the mkdir() function, then a file is created using fopen() function.
   
   A predesigned block of html and php code is written to the files making good use of variables so that the username is printed in the actual code
   The student is then redirected to the indivdual page created for them
   
   
