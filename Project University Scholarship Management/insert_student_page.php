<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Information</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>
    
    <div class= "headline"><h2>Insert Student Information</h2></div>
    <hr>

    <div id= "form">
        <form action= "insert_student.php" class= "form_design" method= "post">
            <input type= "text" name= "std_id" placeholder= "Student ID"> <br> <br>
            <input type= "text" name= "std_name" placeholder= "Name"> <br> <br>
            <input type= "text" name= "cgpa" placeholder= "CGPA"> <br> <br>
            <input type= "text" name= "addr" placeholder= "Address"> <br> <br>
            <input type= "text" name= "phone_no" placeholder= "Phone Number"> <br> <br>
            <input type= "password" name= "pass" placeholder= "Password"> <br> <br>
            <input type= "text" name= "email" placeholder= "Email"> <br> <br>
            <input type= "submit" class= "btn" value= "Insert">
        </form>
    </div>
</body>
</html>