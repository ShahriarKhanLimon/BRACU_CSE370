<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="navbar.css">

    <style>
        body {
            background-color: white;
        }
        
        a:link, a:visited {
            background-color: rgb(68, 133, 255);
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        /* a:hover, a:active {
            background-color: rgb(0, 78, 223);
        } */

        .head {
            margin-top: 10%;
            margin-left: 2%;
            color: rgb(68, 133, 255);
        }

        .lo {
            margin-top: 2%;
            margin-left: 2%;
        }

    </style>
</head>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
    </div>

    <div class="head">
        <h2>Choose User Type</h2>
    </div>

    <div class="lo">
        <a href="index_admin.php">Login as admin</a>
        <a style="margin-left: 10px; margin-right: 10px;"></a>
        <a href="index_student.php">Login as student</a>
    </div>
</body>
</html>