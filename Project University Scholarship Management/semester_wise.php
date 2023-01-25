<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Wise Scholarship</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>
    
    <div class= "headline"><h2>Semester Wise Scholarship</h2></div>
    <hr>
    <br>

    <div class=button> 
    <table align="center" border="1px" style="width:1420px; line-height:40px; background:#66b3ff">
<t>
    <th> Registration ID </th>
    <th> Student ID </th>
    <th> Department </th>
    <th> Semester </th>
    <th> Category</th>
    <th> Percentage </th>
    <th> Status </th>
    <th> Reason </th>
    <th> Submission Date </th>
</t>
    <?php

        require_once('DBconnect.php');

        $sql = "SELECT * FROM scholarship_form ORDER BY semester;";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) != 0){
            

        while($row = mysqli_fetch_array($result))
        {
            ?>
            <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><?php echo $row[8]; ?></td>
        </tr>
    <?php
    }
}
?>
</table>
</div>
</body>
</html>