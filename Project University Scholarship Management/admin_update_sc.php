<?php

require_once('DBconnect.php');

if(isset($_POST['reg_id']) && isset($_POST['sem']) && isset($_POST['cat']) && isset($_POST['pct']) && isset($_POST['stat']) && isset($_POST['reas']) && !empty ($_POST['reas']) && !empty ($_POST['sem']))
{
 
    $registration_id = $_POST['reg_id'];
    $semester = $_POST['sem'];
    $category = $_POST['cat'];
    $percentage = $_POST['pct'];
    $status = $_POST['stat'];
    $reason = $_POST['reas'];
    
    
    $sql = "UPDATE scholarship_form set category='$category', percentage='$percentage', semester='$semester' , status='$status', reason='$reason' where status ='Pending' and registration_id= '$registration_id';";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        ?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="navbar.css">
</head>
    <body>

        <div class= "headline"><h2> Updated Successfully! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "admin_updated_scholarship_form.php">View Updated Scholarship Form</a>
        </div>

        </body>
</html>
<?php
    }
    else{
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Failed to update!</h2></div>
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
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Input box cannot be empty! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php 
}
?>