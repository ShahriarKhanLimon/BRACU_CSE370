<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Your Student Profile</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarhip Management</h1></a>
        <a href= "panel_student.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>
    
    <div class= "headline"><h2>Update Your Student Profile</h2></div>
    <hr>
	<br>
	
	
    <div id= "form">
        <form action= "student_update_student_profile.php" class= "form_design" method= "post">
        <h3>Give your Student ID</h3>
           <input type= "text" name= "std_id" placeholder= "Student ID"> <br> <br>
           <h3>Update Your Student Profile</h3>
            <input type= "text" name= "addr" placeholder= "Update Address"> <br> <br>
            <input type= "text" name= "phon_no" placeholder= "Update Phone Number"> <br> <br>
            <input type= "text" name= "mail" placeholder= "Update Email"> <br> <br>
            <input type= "password" name= "pass" placeholder= "Update Password"> <br> <br>
            <input type= "submit" class= "btn" value= "Update">
        </form>
    </div>
</body>
</html>