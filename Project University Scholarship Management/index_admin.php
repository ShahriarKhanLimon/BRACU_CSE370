<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<body>

    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

    <div id= "form">
        <form action= "login_admin.php" class= "form_design" method= "post">
            <input type= "text" name= "ad_id" placeholder= "Admin ID"> <br> <br>
            <input type= "password" name= "pass" placeholder= "Password"> <br> <br>
            <input type= "submit" class= "btn" value= "Login">
        </form>
    </div>
</body>
</html>