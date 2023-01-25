<?php

//connecting to the DB
require_once('DBconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- <link rel="stylesheet" href="button.css"> -->
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

    <div class= "headline"><h2>Student</h2></div>
    <hr>
    
    <div class= "button"> 
        <a href= "insert_student_page.php">Insert Student Info</a>
    </div>

    <div class= "button"> 
        <a href= "delete_student_page.php">Delete Student Info</a>
   </div>

   <div class= "button">
        <a href= "student_list_by_id_page.php">View Student Info</a>
    </div>

    <div class= "button">
        <a href= "update_student_page.php">Update Student Info</a>
    </div>

    <div class= "button">
        <a href= "search_student_by_id_page.php">Search Student Info</a>
    </div>
    <br>
    <br>
    
    

    <div class= "headline"><h2>Scholarship Form</h2></div>
    <hr>
    
    <div class= "button"> 
        <a href= "admin_view_scholarship_form.php">View Scholarship Form</a>
    </div>

    <div class= "button"> 
        <a href= "admin_edit_scholarship_form.php">Edit Scholarship Form</a>
    </div>
</body>
</html>