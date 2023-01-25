<?php

//connecting to the DB
require_once('DBconnect.php');
//checking if the input text fields are not empty
if(isset($_POST['std_id']) && isset($_POST['addr']) && isset($_POST['phon_no']) && isset($_POST['pass']) && isset($_POST['mail']) && !empty ($_POST['addr']) && !empty ($_POST['mail']) && !empty ($_POST['phon_no']) && !empty ($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $address = $_POST['addr'];
    $phone_no = $_POST['phon_no'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $sql = "UPDATE student SET `address`='$address', phone_no='$phone_no', `password`='$password', email='$email' WHERE student_id= '$student_id';";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the query happening correctly
    if(mysqli_affected_rows($conn)){
        //echo "Updated successfully!";
        //header("Location: panel_student.php");
        ?>
        <!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Updated successfully!</h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

        </body>
	</html>
	<?php
    }
    else{
        //echo "Failed to update. Check all typed correctly or try again.";
       // header("Location: panel_student.php");
       ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Failed to update! Please try again! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

        </body>
	</html>
	<?php
    }
}
    else{
        //echo "Failed to update. Please, fill all the box.";
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Failed to update! Please try again! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

        </body>
	</html>
	<?php
    }
?>