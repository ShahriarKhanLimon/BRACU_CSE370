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
if(isset($_POST['ad_id']) && isset($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $admin_id = $_POST['ad_id'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM admin WHERE admin_id = '$admin_id' AND password = '$password';";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the result returns more than one row
    if(mysqli_num_rows($result) != 0){
        
        header("Location: panel_admin.php");
    }
    else{
        //echo "Admin ID  or  Password is wrong!";
        ?>
        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Admin ID or password is wrong!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "reset_admin_pass_page.php">Reset password</a>
        </div>

        </body>
	    </html>
		
    <?php
    }
}
?>
    
</body>
</html>
