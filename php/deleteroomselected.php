<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Room Selected Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

<script>
function Registration(form){
 let roomno=document.getElementById("roomno").value;

 if(roomno==" "){
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
            <li><a href="employee.php"style="margin-left: 10px">Employee</a></li>
            <li><a href="casher.php"style="margin-left: 10px">Casher</a></li>
            <li><a href="food.php"style="margin-left: 10px">Food</a></li>
            <li><a href="beverage.php"style="margin-left: 10px">Beverage</a></li>
            <li><a href="customer.php"style="margin-left: 10px" id= "active">Customer</a></li>
            <li><a href="feedback.php"style="margin-left: 10px">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 10px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Customer&nbsp;/Delete Room Selected&nbsp;</h2>
		
	<ul>
        <li><a href="viewcustomer.php">View accout</a></li>
        <li><a href="viewroomselected.php">View Room Selected</a></li>
        <li><a href="deletecustomer.php" >Delete account</a></li>
		<li><a href="deleteroomselected.php">Delete Room Selected</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 200px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="color: blue; width:600px;">Delete Room Selected by Customer</h2>
<body>
<form action="deleteroomselected.php" method="post">
<label style="margin-left: 38px;" for="">Room No<span style="color: red;"><sup>*</sup></span>:</label>
<select name="roomno" id="roomno" required>
    <option value="select">--select--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    </select>
    <br> <br> 
 <input style="margin-left: 130px;background-color: green;color: white;font-size:20px;" type="submit" onclick="Registration(this.form)" value="Delete" name="delete">


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
    $roomno =$_POST["roomno"];

$delete ="DELETE FROM Room WHERE Room_No='$roomno'";
if(mysqli_query($connection,$delete)){
    echo "Delete Succesfully";
}
else{
    echo "Not Deleted";
}
    
}
$connection->close();
?>

