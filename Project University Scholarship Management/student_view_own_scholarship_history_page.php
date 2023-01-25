<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Scholarship History</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_student.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>  
    
    <div class="headline"><h2>My Scholarship History</h2></div>
    <hr>
   
    <div id= "form">
        <form action= "student_view_own_scholarship_history.php" class= "form_design" method= "post">
        <input type= "text" name= "std_id" placeholder= "Student ID"> <br> <br>
        <input type= "submit" class= "btn" value= "Search">
        </form>
    </div>

</body>
</html>