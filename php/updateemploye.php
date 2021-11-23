<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Registration Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

<script>
function Registration(form){
 let empid=document.getElementById("empid").value;
 let firstname=document.getElementById("firstname").value;
 let lastname=document.getElementById("lastname").value;
 let gender=document.getElementById("gender").value;
 let address=document.getElementById("address").value;
 let email=document.getElementById("email").value;
 let phonenumber=document.getElementById("phonenumber").value;
 let sal=document.getElementById("salary").value;
 if(empid==" "||firstname==" "||lastname==" "||gender==""||address==" "||email==""||phonenumber==" "
 ||sal==" "){
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
        <h2>Employee&nbsp;/Registration&nbsp;</h2>
		
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
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Update Employee Registration</h2>
<body>
<form action="updateemploye.php" method="post">
<label style="margin-left: 40px;" for="">Emp ID<span style="color: red;"><sup>*</sup></span>:</label>
<input type="text" name="empid" id="empid" required placeholder="emp id"  pattern="[a-zA-Z0-9]{3,}" title="please enter more than three letters">
    <br> <br> 
 <label style="margin-left: 28px;" for="">First Name<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="text" name="firstname" id="firstname" required placeholder="first name"  pattern="[a-zA-Z]{3,}" title="please enter more than three letters">
 <br><br>
 <label style="margin-left: 28px;" for="">Last Name<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="text" name="lastname" id="lastname" required placeholder="last name"  pattern="[a-zA-Z]{3,}" title="please enter more than three letters">
 <br><br>
 <label style="margin-left: 53px;" for="">Gender<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="radio" name="gender" id="gender" value="Male">Male
 <input type="radio" name="gender" id="gender"value="Female">Female
 <br> <br>
 <label style="margin-left: 65px;" for="">Email<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="email" name="email" id="email"required placeholder="your email" pattern="[a-zA-Z0-9]{3,20}@[a-zA-Z]{4,7}.[a-zA-Z]{2,3}" title="please enter valid email address">
	<br> <br>
<label for="">Phone Number<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="text" name="phoneNumber" id="phonenumber" required placeholder="your phone">
 <br> <br>
 <label style="margin-left: 50px;" for="">Address<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="text" name="address" id="address" placeholder="your address" required pattern="[a-zA-Z]{3,}" title="please enter in more than three letters">
 <br><br>
 <label style="margin-left: 65px;" for="">Salary<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="salary" id="salary" required>
    <option value="select">--select--</option>
     <option value="4000">4000</option>
    <option value="5000">5000</option>
    <option value="2500">2500</option>
    <option value="3000">3000</option>
    </select>
	<br> <br>
 <input style="margin-left: 130px;background-color: green;color: white; font-size:20px;" type="submit" onclick="Registration(this.form)" value="Update" name="update">


</p>

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

if(isset($_POST['update'])){
    $empid =$_POST["empid"];
    $fname =$_POST["firstname"];
    $lname =$_POST["lastname"];
    $gender =$_POST["gender"];
    $email =$_POST["email"];
    $phonee =$_POST["phoneNumber"];
    $addr =$_POST["address"];
    $sal =$_POST["salary"];
    
    $update ="UPDATE Employee set EmpID=".$empid.",FName='".$fname."',LName='".$lname."',Gender='".$gender."',Email='".$email."',
    Phone=".$phonee.",Address='".$addr."',Salary=".$sal." where EmpID='$empid'";
    if(mysqli_query($connection,$update)){
        echo "Update Succesfully";
    }
    else{
        echo "Not Updated";
    }
        
    }
    $connection->close();
    ?>



