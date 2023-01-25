<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>

<?php

//connecting to the DB
require_once('DBconnect.php');

//checking if the input text fields are not empty
if(isset($_POST['std_id']) && isset($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password';";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the result returns more than one row
    if(mysqli_num_rows($result) != 0){
        
        header("Location: panel_student.php");
    }
    else{

        ?>

        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Student ID or password is wrong!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "reset_student_pass_page.php">Reset password</a>
        </div>

        </body>
	    </html>
     
    <?php
    }
}
?>
    
</body>
</html>