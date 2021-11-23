<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Board</title>
      <link rel = "stylesheet" type = "text/css" href = "stylee.css">

	</head>
<body>
<div id="container">
	<div id="header">
		
		<div id="top_info">
		<h2>Hotel Reservation Management System</h2>
		</div>
	
	</div>

	<div id="right_coll" style="margin-left: 1000px;">
	
   <form action="login.php" method="post">

	<div class="right_img">
		 <img style="margin-left: 250px;" src="login.jfif" height="180" width="170">
	</div>
		<div style="margin-top: 130px;margin-left:400px ;">
    <h2 style="margin-left: 100px;color: blue;font-size: 30px;">Login Form </h2>
	<label style="margin-left: 40px;" for="">User Name<span style="color: red;font-size: 25px;"><sup>*</sup></span>:</label>
	<input type="text" name="username" id="username" required placeholder="user name" style="font-size: 20px;">
	<br><br>
	<label style="margin-left: 53px;" for="">Password<span style="color: red;font-size: 25px;"><sup>*</sup></span>:</label >
	<input type="password" name="password" id="pass" required placeholder="password"style="font-size: 20px;">
	<br> <br>
	<input style="margin-left: 140px;background-color: green; color: white;font-size: 23px;" type="submit" name="login" value="Login">
	<a href="customAccount.php" style="margin-left: 20px; text-decoration: none;">Create new account</a>
  
</div>
</form>

</div>    
		
	<div id="footerr">
		Wolkite University Information system 3rd Year Student Group #1.<br/>
		&copy; 2013 E.C All Right Reserved.			
	</div>
</div>
</body>
</html>

<?php
$user="root";
$password="";

$connection=mysqli_connect("localhost",$user,$password);
mysqli_select_db($connection,"HRMS");

if(isset($_POST['login'])){
 $usernam =$_POST["username"];
 $pasword =$_POST["password"];

 $select1="SELECT * FROM Administrator where Username ='$usernam' and Password='$pasword'";
 $select2="SELECT * FROM Casher where Username ='$usernam' and Password='$pasword'";
 $select3="SELECT * FROM Customer where Username ='$usernam' and Password='$pasword'";
 $result1 = $connection->query($select1);
 $result2 = $connection->query($select2);
 $result3 = $connection->query($select3);

  if($result1->num_rows > 0){
    header("Location:admin_home.php");
 }
 else if($result2->num_rows > 0){
   header("Location:Casher_home.php");
 }
 else if($result3->num_rows > 0){
   header("Location:Customer_home.php");
}
else{
   echo "please try again";
}
}
$connection->close();   
?>