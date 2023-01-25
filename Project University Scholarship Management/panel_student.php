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
    <title>Student Panel</title>
    <!-- <link rel="stylesheet" href="button.css"> -->
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_student.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

    <div class= "headline"><h2>My Student Profile</h2></div>
    <hr>
    
    <div class= "button"> 
        <a href= "student_update_student_profile_page.php">Update My Student Profile</a>
    </div>

    <div class= "button"> 
        <a href= "student_view_own_scholarship_history_page.php">My Scholarship History</a>
    </div>

    <div class= "button"> 
        <a href= "student_view_current_status_page.php">Current Status of My Application</a>
    </div>
    <br>
    <br>
    <br>
    

	<div class= "headline"><h2>Scholarship Application</h2></div>
    <hr>
    
    <div class= "button"> 
        <a href= "scholarship_form_page.php"> Application Form</a>
    </div>

    <div class= "button"> 
		<a href= "stud_view_scholarship_form_page.php">View Scholarship Request Info</a>
        
    </div>
	<div class= "button"> 
        <a href= "delete_scholarship_form_page.php">Delete Scholarship Request</a>
    </div>
</body>
</html>