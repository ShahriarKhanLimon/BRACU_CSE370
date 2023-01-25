<?php

//connecting to the DB
require_once('DBconnect.php');

//checking if the input text fields are not empty
if(isset($_POST['std_id']) && isset($_POST['std_name']) && isset($_POST['cgpa']) && 
isset($_POST['addr']) && isset($_POST['phon_no']) && isset($_POST['pass']) && isset($_POST['mail']) && !empty ($_POST['mail']) && !empty ($_POST['std_name']) && !empty ($_POST['cgpa']) && !empty ($_POST['addr']) && !empty ($_POST['phon_no']) && !empty ($_POST['pass'])){

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $student_name = $_POST['std_name'];
    $cgpa = $_POST['cgpa'];
    $address = $_POST['addr'];
    $phone_no = $_POST['phon_no'];
    $password = $_POST['pass'];
    $email = $_POST['mail'];
    $sql = "UPDATE student SET student_id= '$student_id', `name`='$student_name', CGPA='$cgpa', `address`='$address', phone_no='$phone_no', `password`='$password', email='$email' where student_id= '$student_id';";

    //executing the query
    $result = mysqli_query($conn, $sql);

    //checking if the query happening correctly
    if(mysqli_affected_rows($conn)){
        //echo "Updated successfully!";
        //header("Location: panel_admin.php");
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Updated Successfully! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php  
    }
    else{
        //echo "Failed to update!";
        //header("Location: panel_admin.php");
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to update! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php  
    }
}
else{
    //echo "Failed to update!";
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to update! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php  
}
?>