<?php

//connecting to the DB
require_once('DBconnect.php');
//checking if the input text fields are not empty
if(isset($_POST['ad_id']) && isset($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $admin_id = $_POST['ad_id'];
    $password = $_POST['pass'];
    $sql = "UPDATE `admin` SET `password`='$password' WHERE admin_id= '$admin_id';";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the query happening correctly
    if($result && mysqli_affected_rows($conn)){
        //echo "Reset successfully!";
        //header("Location: panel_student.php");
        ?>
        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Reset successfully!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "index_admin.php">Login</a>
        </div>

        </body>
	    </html>
       <?php
    }
    else{
        //echo "Failed to Reset! Please try again";
       // header("Location: panel_student.php");
       ?>
        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Failed to reset! Please try again!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "reset_admin_pass_page.php">Back</a>
        </div>

        </body>
	    </html>
       <?php
    }

}
?>