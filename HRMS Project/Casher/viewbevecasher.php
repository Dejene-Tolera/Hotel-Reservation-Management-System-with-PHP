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
         <li><a href="Casher_home.php"style="margin-left: 5px" id= "active">Home</a></li>
            <li><a href="cashAbout.php"style="margin-left: 10px">About</a></li>
            <li><a href="cashcontact.php"style="margin-left: 10px">Contact</a></li>
            <li><a href="cashhelp.php"style="margin-left: 10px">Help</a></li>
            <li><a href="cashcash.php"style="margin-left: 10px">Casher</a></li>
            <li><a href="cashfeedback.php"style="margin-left: 10px">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 400px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Beverage&nbsp;/View Beverage&nbsp;</h2>
		
	<ul>
        <li><a href="viewfoodcasher.php">View Food</a></li>
        <li><a href="viewbevecasher.php">View Beverage</a></li>
        <li><a href="customer.html" >Billing Generation</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 200px;">
                       
                 
                     
<head>
<h2 style="margin-left: 70px;color: blue;width: 500px;">View Beverage Registration</h2>
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


