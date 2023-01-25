<?php

//connecting to the DB
require_once('DBconnect.php');

//checking if the input text fields are not empty
if(isset($_POST['reg_id']) && isset($_POST['std_id']) && isset($_POST['dept']) && isset($_POST['sem']) && 
isset($_POST['cat']) && isset($_POST['sub_date']) ){

    //checking if the username and the password exist in the DB
	$registration_id = $_POST['reg_id'];
    $student_id = $_POST['std_id'];
    $department = $_POST['dept'];
    $semester = $_POST['sem'];
    $category = $_POST['cat'];
    $percentage = NULL;
	$status = "Pending";
	$reason = NULL;
	$submission_date = $_POST['sub_date'];
    $sql = "INSERT INTO scholarship_form VALUES('$registration_id','$student_id', '$department', '$semester', '$category', '$percentage', '$status', '$reason', '$submission_date');";

    //executing the query
    $result = mysqli_query($conn, $sql);
	
    //checking if the query happening correctly
    if($result && mysqli_affected_rows($conn)){
        //echo "Submitted successfully!";
        //header("Location: panel_student.php");
		?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Submitted successfully! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

        </body>
</html>
		
		<?php
		
		
    }
    else{
        //echo "Failed to submit!";
        //header("Location: panel_student.php");
		?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Failed to submit! Please submit correct info! </h2></div>
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
	//echo"Failed to submit! Check if any Input box is empty!";
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Failed to submit! Check if any info is empty! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

    </body>
	</html>	
    <?php
}
?>