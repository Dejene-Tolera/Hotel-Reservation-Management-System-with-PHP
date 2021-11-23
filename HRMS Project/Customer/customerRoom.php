<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Choose Room Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

<script>
function Registration(form){
 let roomno=document.getElementById("roomno").value;
 let roomtype=document.getElementById("roomtype").value;
 let roomfloor=document.getElementById("roomfloor").value;
 let roomprice=document.getElementById("roomprice").value;
 if(roomno==" "||roomtype==" "||roomfloor==" "||roomprice==""){
  alert("please fullfill all information")

 }
 else{
     alert("Succesfully Registered")
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
            <li><a href="Customer_home.php"style="margin-left: 5px">Home</a></li>
            <li><a href="custAbout.php"style="margin-left: 10px">About</a></li>
            <li><a href="custcontact.php"style="margin-left: 10px">Contact</a></li>
            <li><a href="custhelp.php"style="margin-left: 10px">Help</a></li>
            <li><a href="custcust.php"style="margin-left: 10px"  id= "active">Customer</a></li>
            <li><a href="custfeedback.php"style="margin-left: 10px">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 400px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Customer&nbsp;/Choose Room&nbsp;</h2>
		
	<ul>
        <li><a href="employee.html">Food Menu</a></li>
        <li><a href="room.html">Beverage Menu</a></li>
        <li><a href="customerRoom.php" >Choose Room</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 100px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Customer Choose Room Form</h2>
<body>
<form action="customerRoom.php" method="post">
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
 <label style="margin-left: 25px;" for="">Room Type<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="roomtype" id="roomtype" required>
    <option value="select">--select--</option>
     <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
 <br><br>
 <label style="margin-left: 25px;" for="">Room Floor<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="roomfloor" id="roomfloor" required>
    <option value="select">--select--</option>
     <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
 <br><br>
 <label style="margin-left: 25px;" for="">Room Price<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="roomprice" id="roomprice" required>
    <option value="select">--select--</option>
     <option value="100">100</option>
    <option value="150">150</option>
    <option value="200">200</option>
    </select>
	<br> <br>
 <input style="margin-left: 130px;background-color: green;color: white;font-size: 23px;" type="submit" onclick="Registration(this.form)" value="Choose" name="choose">
 

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

$connection=mysqli_connect("localhost",$user,$password) or die("not connected".mysqli_error());
mysqli_select_db($connection,"HRMS");

if(isset($_POST['choose'])){
    $roomno =$_POST["roomno"];
    $roomtype =$_POST["roomtype"];
    $roomfloor =$_POST["roomfloor"];
    $roomprice =$_POST["roomprice"];

$insert ="INSERT INTO Room values(".$roomno.",'".$roomtype."','".$roomfloor."','".$roomprice."')";
if(mysqli_query($connection,$insert)){
    echo "Inserted Succesfully";
}
else{
    echo "Not Inserted";
}
    }

?>

