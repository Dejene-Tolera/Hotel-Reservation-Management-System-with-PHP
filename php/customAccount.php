<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer create account Board</title>
      <link rel = "stylesheet" type = "text/css" href = "stylee.css">


      <script>
function Registration(form){
 let customid=document.getElementById("customid").value;
 let firstname=document.getElementById("firstname").value;
 let lastname=document.getElementById("lastname").value;
 let gender=document.getElementById("gender").value;
 let address=document.getElementById("address").value;
 let email=document.getElementById("email").value;
 let phonenumber=document.getElementById("phonenumber").value;
 let user=document.getElementById("username").value;
 let pass=document.getElementById("password").value;
 let confpass=document.getElementById("confpass").value;
 if(customid==" "||firstname==" "||lastname==" "||gender==""||address==" "||address==" "||email==""||phonenumber==" "
 ||sal==" "||user==" "||pass==" "||confpass==" "){
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
		<h2>Hotel Reservation Management System</h2>
		</div>
	
	</div>

	<div id="right_coll" style="margin-left: 1000px;">


		<div style="margin-left:350px ;">
    <h2 style="color: blue;font-size: 30px;">Customer Create Account  </h2>
	<form action="customAccount.php" method="post">
        <label style="margin-left: 28px;" for="">Custom ID<span style="color: red;"><sup>*</sup></span>:</label>
        <input type="text" name="customid" id="customid" required placeholder="customer id"  pattern="[a-zA-Z0-9]{3,}" title="please enter more than three letters">
            <br> <br> 
         <label style="margin-left: 27px;" for="">First Name<span style="color: red;"><sup>*</sup></span>:</label>
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
        <label style="margin-left: 30px;" for="">User Name<span style="color: red;"><sup>*</sup></span>:</label>
        <input type="text" name="username" id="username" required placeholder="user name"  pattern="[a-zA-Z]{3,}" title="please enter more than three letters">
         <br><br>
        <label style="margin-left: 41px;" for="">Password<span style="color: red;"><sup>*</sup></span>:</label>
         <input type="password" name="password" id="password" required placeholder="password">
         <br> <br>
         <label for="">Confirm Password<span style="color: red;"><sup>*</sup></span>:</label>
         <input type="password" name="confirmpassword" id="confpass" required placeholder="confirm password">
         <br> <br>
         <input style="margin-left: 130px;background-color: green;color: white; font-size: 20px;" type="submit" name="register" value="Signup">
      
       <a href="login.php" style="margin-left: 20px;text-decoration: none;font-size: 20px;">Login</a>
       </p>
    </form>
</div>
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

if(isset($_POST['register'])){
    $customid =$_POST["customid"];
    $fname =$_POST["firstname"];
    $lname =$_POST["lastname"];
    $gender =$_POST["gender"];
    $email =$_POST["email"];
    $phonee =$_POST["phoneNumber"];
    $addr =$_POST["address"];
    $usernam =$_POST["username"];
    $pass =$_POST["password"];
    $conpass =$_POST["confirmpassword"];

if($pass == $conpass){ 
$insert ="INSERT INTO Customer values(".$customid.",'".$fname."','".$lname."','".$gender."','".$email."',
".$phonee.",'".$addr."','".$usernam."','".$pass."')";
  if(mysqli_query($connection,$insert)){
    echo "Inserted Succesfully";
  }
   else{
    echo "Not Inserted";
}
    }
else{
        echo "please insert the same password and confirm password";
    }
}
?>