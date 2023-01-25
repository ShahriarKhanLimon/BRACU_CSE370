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
if(isset($_POST['std_id']) && !empty ($_POST['std_id'])){ 

    //checking if the username and the password exist in the DB
    $student_id = $_POST['std_id'];
    $sql = "SELECT * FROM student WHERE student_id = '$student_id';";
    //executing the query
    $result = mysqli_query($conn, $sql);
    
    //checking if the query happening correctly
    if(mysqli_affected_rows($conn)){
        ?>

    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

        <div class= "button">
        <table align= "center" style="width: 95%;">
        <tr>
            <th>Student ID</th>
            <th>name</th>
            <th>CGPA</th>
            <th>address</th>
            <th>phone_no</th>
            <th>password</th>
            <th>email</th>
        </tr>

        <?php

        require_once('DBconnect.php');
        require_once('login_student.php');

        $sql = "SELECT * FROM student WHERE student_id = '$student_id';";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) != 0){
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

            </tr>
            <?php
            }
        }
    ?>  
    </table>
    <div>
        <?php
    }
    else{
        //echo "Result not found";
        //header("Location: index_admin.php");
        ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Result not found! </h2></div>
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
    //echo "Failed to find result!";
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>  
		<link rel="stylesheet" href="navbar.css">
	</head>
    <body>
		<div class= "headline"><h2>Result not found! </h2></div>
        <hr>
    
        <div class= "button"> 
            <a href= "panel_admin.php">Back to Home</a>
        </div>

        </body>
	</html>
		
		<?php
}
?>

</body>
</html>