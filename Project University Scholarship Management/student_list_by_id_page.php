<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
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

    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>

    <div class= "headline"><h2>Student</h2></div>
    <hr>
    <br>
    
    <div class= "button">
    <table align= "center" style="width: 95%;">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>CGPA</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Password</th>
            <th>Email</th>
        </tr>

        <?php

        require_once('DBconnect.php');

        $sql = "SELECT * FROM student ORDER BY student_id;";
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
</body>
</html>