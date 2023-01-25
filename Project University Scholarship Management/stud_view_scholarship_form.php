<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
    <style>

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 30px;
            border-color: white;
        }
        tr:nth-child(even) {
            background-color:rgb(68, 133, 255);
        }
        /* tr:hover {
            background-color: rgb(68, 133, 255);
        }
        a:link, a:visited {
            color: bisque;
        }
        a:hover {
            color: blueviolet;
            text-decoration: underline;
        } */
    </style>
</head>
<body>

<?php

//connecting to the DB
require_once('DBconnect.php');
require_once('login_student.php');

//checking if the input text fields are not empty
if(isset($_POST['std_id'])){ 

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $sql = "SELECT * FROM scholarship_form WHERE student_id = '$student_id';";
    //executing the query
    $result = mysqli_query($conn, $sql);
    
    //checking if the query happening correctly
    if(mysqli_affected_rows($conn)){
        ?>

    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_student.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

        <!-- <div class= "button">
        <table align= "center" style="width: 95%;">
        <tr>
            <th>Registration ID</th>
            <th>Student ID</th>
			<th>Department</th>
			<th>Semester</th>
            <th>Category</th>
            <th>Percentage</th>
            <th>Status</th>
            <th>Reason</th>
            <th>Submission Date</th>
        </tr> -->

        <?php

        require_once('DBconnect.php');
        require_once('login_student.php');

        $sql = "SELECT * FROM scholarship_form WHERE student_id = '$student_id' AND status='Pending';";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) != 0){
            ?>
            <div class= "button">
        <table align= "center" style="width: 95%;">
        <tr>
            <th>Registration ID</th>
            <th>Student ID</th>
			<th>Department</th>
			<th>Semester</th>
            <th>Category</th>
            <th>Percentage</th>
            <th>Status</th>
            <th>Reason</th>
            <th>Submission Date</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr>
                <td align= "center"> <?php echo $row[0]?> </td>
                <td align= "center"> <?php echo $row[1]?> </td>
                <td align= "center"> <?php echo $row[2]?> </td>
                <td align= "center"> <?php echo $row[3]?> </td>
                <td align= "center"> <?php echo $row[4]?> </td>
                <td align= "center"> <?php echo $row[5]?> </td>
                <td align= "center"> <?php echo $row[6]?> </td>
                <td align= "center"> <?php echo $row[7]?> </td>
                <td align= "center"> <?php echo $row[8]?> </td>
            </tr>
            <?php
            
			}
			
        }
        else{
            //echo "Access denied!! Please submit correct info!";
            //header("Location: index_admin.php");
            ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>  
            <link rel="stylesheet" href="navbar.css">
        </head>
        <body>
            <div class= "headline"><h2> No scholarship request found! </h2></div>
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
        //echo "Access denied!! Please submit correct info!";
        //header("Location: index_admin.php");
		?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2> Access denied! Please try again! </h2></div>
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
		<div class= "headline"><h2> Access denied! Please try again! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_student.php">Back to Home</a>
        </div>

        </body>
	</html>	
	<?php
}

?>

</body>
</html>