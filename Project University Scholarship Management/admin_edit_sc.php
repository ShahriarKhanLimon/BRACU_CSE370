<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Scholarship Form</title>
    <link rel="stylesheet" href="student_form_style.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<style>

.InputBox{
    padding:10px;
    width:80%;
}

    </style>
<body>
    <div class="banner">
        <a href= "index.php"><h1>University Scholarship Management</h1></a>
        <a href= "panel_admin.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>
    
    <div class= "headline"><h2>Update Pending Scholarship Form</h2></div>
    <hr>

    <div id= "form">
        <form action= "admin_update_sc.php" class= "form_design" method= "post">
            <input type= "text" name= "reg_id" placeholder= "Registration ID"> <br> <br>
            <input type= "text" name= "sem" placeholder= "Semester"> <br> <br>
            <select name="cat" class="InputBox" >
            <option value disabled selected>Category</option>   
            <option value ="Merit Based"> Merit Based </option>
            <option value ="Freedom Fighter"> Freedom Fighter </option>
            <option value ="Sibling"> Sibling </option>
            <option value ="Spouse"> Spouse </option>
            
    </select> <br> <br>
            <select name="pct" class="InputBox" >
            <option value disabled selected>Percentage</option>   
            <option value ="100"> 100 </option>
            <option value ="75"> 75 </option>
            <option value ="50"> 50 </option>
            <option value ="25"> 25 </option>
            
    </select> <br> <br>
            <select name="stat" class="InputBox" >
            <option value disabled selected>Status</option>   
            <option value ="Approved"> Approved </option>
            <option value ="Declined"> Declined</option>
    </select> <br> <br>
            <input type= "text" name= "reas" placeholder= "Reason"> <br> <br>
            <input type= "submit" class= "btn" value= "Submit">
        </form>
    </div>
</body>
</html>