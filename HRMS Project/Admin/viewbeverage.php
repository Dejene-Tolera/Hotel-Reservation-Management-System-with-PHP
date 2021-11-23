<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Beverage Registration Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
<style>
    table tr th{
	 border: 1px solid black;
	 border-collapse: collapse;
	 width: 450px;
 }
 table{
    border: 1px solid black;
    border-collapse: collapse;
 }
 tr{
    border: 1px solid black;
    border-collapse: collapse; 
 }
 td{
    border: 1px solid black;
    border-collapse: collapse; 
 }
 </style>
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
            <li><a href="administrator.php"style="margin-left: 10px" id= "active">Administrator</a></li>
            <li><a href="employee.php"style="margin-left: 10px">Employee</a></li>
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
        <h2>Beverage&nbsp;/View&nbsp;</h2>
		
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
		
		
		<div class="right_info" style="margin-right: 200px;">
                       
                 
                     
<head>
<h2 style="margin-left: 70px;color: blue;width: 500px;">View Beverage Registration Form </h2>
<body>
<table>
<tr>

    <th>Beve_Name</th>
    <th>Beve_Type</th>  
    <th>Beve_Price </th>
</tr>

<?php
$user="root";
$password="";

$connection=mysqli_connect("localhost",$user,$password);
mysqli_select_db($connection,"HRMS");

$sql="SELECT * FROM Beverage";
$result=$connection->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    echo"<tr><td>".$row['Beve_Name']." "."</td><td>".$row['Beve_Type']." "."</td><td>".$row['Beve_Price']." "."</td></tr>";
}
}

$connection->close();

?>
</table>
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


