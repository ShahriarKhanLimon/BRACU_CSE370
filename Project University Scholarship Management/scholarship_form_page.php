<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Scholarship Form </title>
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
        <a href= "panel_student.php"><h2>Home</h2></a>
        <a href= "index_admin.php"><h2>Admin</h2></a>
        <a href= "index_student.php"><h2>Student</h2></a>
    </div>
    
    <div class= "headline"><h2>Scholarship Application Form</h2></div>
    <hr>
	
	
	
    <div id= "form">
        <form action= "scholarship_form.php" class= "form_design" method= "post">
			<input type= "text" name= "reg_id" placeholder= "Registration ID"> <br> <br>
            <input type= "text" name= "std_id" placeholder= "Student ID"> <br> <br>
			<input type= "text" name= "dept" placeholder= "Department"> <br> <br>
			<select type="var_dump" name="sem" class="InputBox" >
            <option value disabled selected>Semester</option>   
            <option value ="2021 spring"> 2021 spring </option>
			<option value ="2021 summer"> 2021 summer </option>
			<option value ="2021 fall"> 2021 fall </option>
			<option value ="2022 spring"> 2022 spring </option>
			<option value ="2022 summer"> 2022 summer </option>
			<option value ="2022 fall"> 2022 fall </option>
			<option value ="2023 spring"> 2023 spring </option>
			<option value ="2023 summer"> 2023 summer </option>
			<option value ="2023 fall"> 2023 fall </option>
			<option value ="2024 spring"> 2024 spring </option>
			<option value ="2024 summer"> 2024 summer </option>
			<option value ="2024 fall"> 2024 fall </option>
			</select>
			<br>
			<br>
			<br>
			<select name="cat" class="InputBox" >
            <option value disabled selected>Category</option>   
            <option value ="Freedom Fighter"> Freedom Fighter </option>
			<option value ="Merit Based"> Merit Based </option>
			<option value ="Sibling"> Sibling </option>
			<option value ="Spouse"> Spouse </option>
			</select>
			<br>
			<br>
			<input type= "text" name= "sub_date" placeholder= "Submission Date (YYYY-MM-DD)"> <br> <br>
            <input type= "submit" class= "btn" value= "Submit">
        </form>
    </div>
</body>
</html>