<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Employee Registration Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

<script>
function Registration(form){
 let empid=document.getElementById("empid").value;

 if(empid==" "){
  alert("please fullfill all information")

 }
 else{
     alert("Succesfully fulfill")
 }

}


</script>

</head>
<body>
<div id="container">
	<div id="header">
		
		<div id="top_info">
		<h2>Hotel Reservation Management System </h2>
		</div>
		<div id="navbar">
		<ul>
			<li><a href="Admin_home.php"style="margin-left: 5px">Home</a></li>
            <li><a href="about.php"style="margin-left: 10px">About</a></li>
            <li><a href="administrator.php"style="margin-left: 10px">Administrator</a></li>
            <li><a href="employee.php"style="margin-left: 10px" id= "active">Employee</a></li>
            <li><a href="casher.php"style="margin-left: 10px">Casher</a></li>
            <li><a href="food.php"style="margin-left: 10px">Food</a></li>
            <li><a href="beverage.php"style="margin-left: 10px">Beverage</a></li>
            <li><a href="customer.php"style="margin-left: 10px">Customer</a></li>
            <li><a href="feedback.php"style="margin-left: 10px">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 10px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Employee&nbsp;/Delete&nbsp;</h2>
		
	<ul>
		<li><a href="EmployeRegistration.php">Registration</a></li>
        <li><a href="viewemploye.php">View</a></li>
        <li><a href="updateemploye.php">Update</a></li>
        <li><a href="deleteemploye.php" >Delete</a></li>
		
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 100px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;width:500px">Delete Employee Registration by EmpID</h2>
<body>
<form action="deleteemploye.php" method="post">
<label style="margin-left: 40px;" for="">Emp ID<span style="color: red;"><sup>*</sup></span>:</label>
<input type="text" name="empid" id="empid" required placeholder="emp id"  pattern="[a-zA-Z0-9]{3,}" title="please enter more than three letters">
    <br> <br> 
 
 <input style="margin-left: 130px;background-color: green;color: white; font-size:20px;" type="submit" onclick="Registration(this.form)" value="Delete" name="delete">

</form>

</head>
</div>
</div>
</div>    
	<div id="footer">
		Wolkite University Information system 3rd Year Student Group #1.<br/>
		&copy; 2013 E.C All Right Reserved.			
	</div>
  </div>
  </div>
</body>
</html>

<?php
$user="root";
$password="";

$connection=mysqli_connect("localhost",$user,$password);
mysqli_select_db($connection,"HRMS");

if(isset($_POST['delete'])){
    $empid =$_POST["empid"];
  
    $delete ="DELETE FROM Employee WHERE EmpID='$empid'";
    if(mysqli_query($connection,$delete)){
        echo "Delete Succesfully";
    }
    else{
        echo "Not Deleted";
    }
        
    }
    $connection->close();
    ?>



