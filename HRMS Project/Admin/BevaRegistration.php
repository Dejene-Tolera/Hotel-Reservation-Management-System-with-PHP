<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beverage Registration Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

<script>
function Registration(form){
 let bevename=document.getElementById("bevename").value;
 let bevetype=document.getElementById("bevetype").value;
 let beveprice=document.getElementById("beveprice").value;
 if(foodname==" "||foodtype==" "||foodprice==" "){
  alert("please fullfill all information")

 }
 else{
     alert("Succesfully Registered")
 }

}
function clear(form)
{
 document.getElementById("bevename").value="";
 document.getElementById("bevetype").value="";
 document.getElementById("beveprice").value="";
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
            <li><a href="employee.php"style="margin-left: 10px">Employee</a></li>
            <li><a href="casher.php"style="margin-left: 10px">Casher</a></li>
            <li><a href="food.php"style="margin-left: 10px">Food</a></li>
            <li><a href="beverage.php"style="margin-left: 10px" id= "active">Beverage</a></li>
            <li><a href="customer.php"style="margin-left: 10px">Customer</a></li>
            <li><a href="feedback.php"style="margin-left: 10px">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 10px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Food&nbsp;/Registration&nbsp;</h2>
		
	<ul>
		<li><a href="BevaRegistration.php">Registration</a></li>
        <li><a href="viewbeverage.php">View</a></li>
        <li><a href="updatebeverage.php">Update</a></li>
        <li><a href="deletebeverage.php" >Delete</a></li>
		<li><a href="casher.html">Search</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 100px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Food Registration Form </h2>
<body>
<form action="BevaRegistration.php" method="post">
 <label style="margin-left: 21px;" for="">Beva Name<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="bevename" id="bevename" required>
    <option value="select">--select--</option>
     <option value="Sink">Sink</option>
    <option value="Shaye">Shaye</option>
    <option value="Uski">Uski</option>
    <option value="Milk">Milk</option>
    </select>
 <br><br>
 <label style="margin-left: 30px;" for="">Beva Type<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="bevetype" id="bevetype" required>
    <option value="select">--select--</option>
     <option value="Bira">Bira</option>
    <option value="Hot beva">Hot beva</option>
    <option value="Alcohol">Alcohol</option>
    <option value="Softdrink">Softdrink</option>
    </select>
 <br><br>
 <label style="margin-left: 30px;" for="">Beva Price<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="beveprice" id="beveprice" required>
    <option value="select">--select--</option>
     <option value="25.75">25.75</option>
    <option value="3000">3000</option>
    <option value="15">15</option>
    <option value="20">20</option>
    </select>
	<br> <br>
 <input style="margin-left: 100px;background-color: green;color: white;" type="submit" onclick="Registration(this.form)" value="Register" name="register">
 <input style="margin-left: 10px;background-color:red;color: white;" type="submit" onclick="clear(this.form)" value="Clear">

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

if(isset($_POST['register'])){
    $bvname =$_POST["bevename"];
    $bvtype =$_POST["bevetype"];
    $bvprice =$_POST["beveprice"];
    
$insert ="INSERT INTO Beverage values('".$bvname."','".$bvtype."',".$bvprice.")";
if(mysqli_query($connection,$insert)){
    echo "Inserted Succesfully";
}
else{
    echo "Not Inserted";
}

}
?>

