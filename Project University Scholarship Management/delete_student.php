<?php

//connecting to the DB
require_once('DBconnect.php');

//checking if the input text fields are not empty
if(isset($_POST['std_id']) && !empty ($_POST['std_id'])){ 

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $sql = "DELETE FROM student WHERE student_id = '$student_id';";
    //executing the query
    $result = mysqli_query($conn, $sql);
    
    //checking if the query happening correctly
    if($result && mysqli_affected_rows($conn)){
        //echo "Deleted successfully!";
        //header("Location: panel_admin.php");
        ?>
        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Deleted successfully!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	    </html>
       <?php
    }
    else{
        //echo "Failed to delete!";
        //header("Location: panel_admin.php");
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to delete! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php
    }
}
else {
    //echo "Failed to delete!"; 
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to delete! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php  
}
?>