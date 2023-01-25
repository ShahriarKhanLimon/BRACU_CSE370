<?php

//connecting to the DB
require_once('DBconnect.php');

//checking if the input text fields are not empty
if(isset($_POST['std_id']) && isset($_POST['std_name']) && isset($_POST['cgpa']) && 
isset($_POST['addr']) && isset($_POST['phone_no']) && isset($_POST['pass']) && isset($_POST['email']) && !empty($_POST['std_id']) && !empty($_POST['std_name']) && !empty($_POST['cgpa']) && !empty($_POST['addr']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $student_name = $_POST['std_name'];
    $cgpa = $_POST['cgpa'];
    $address = $_POST['addr'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $sql = "INSERT INTO student VALUES('$student_id', '$student_name', '$cgpa', '$address', '$phone_no', '$password', '$email');";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the query happening correctly
    if($result && mysqli_affected_rows($conn)){
        //echo "Inserted successfully!";
        //header("Location: panel_admin.php");
        ?>
        <!DOCTYPE html>
	    <html lang="en">
	    <head>  
		<link rel="stylesheet" href="navbar.css">
	    </head>
        <body>
		<div class= "headline"><h2>Inserted successfully!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	    </html>
       <?php
    }
    else{
        //echo "Failed to insert!";
        //header("Location: panel_admin.php");
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to insert! </h2></div>
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
    //echo "Failed to insert!";
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to insert! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php
}
?>