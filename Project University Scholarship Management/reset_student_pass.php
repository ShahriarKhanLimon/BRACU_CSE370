<?php

//connecting to the DB
require_once('DBconnect.php');
//checking if the input text fields are not empty
if(isset($_POST['std_id']) && isset($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $password = $_POST['pass'];
    $sql = "UPDATE student SET `password`='$password' WHERE student_id= '$student_id';";

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
            <a href= "index_student.php">Login</a>
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
            <a href= "reset_student_pass_page.php">Back</a>
        </div>

        </body>
	    </html>
       <?php
    }

}
?>