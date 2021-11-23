<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Casher Feedback Submit Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

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
        <h2>Feedback&nbsp;/Make Feedback&nbsp;</h2>
		
	<ul>
		<li><a href="cashFeedSubmit.php">Make Feedback</a></li>
        <li><a href="updatecashfeedback.php" >Update feedback</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 100px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Casher Feedback Form </h2>
<body>
<form action="cashFeedSubmit.php" method="post">
<label style="margin-left: 40px;" for="">Feed ID<span style="color: red;"><sup>*</sup></span>:</label>
<input type="text" name="feedid" id="feedid" required placeholder="feed id"  pattern="[a-zA-Z0-9]{3,}" title="please enter more than three letters">
    <br> <br> 
 <label style="margin-left: 18px;" for="">Feed Name<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="text" name="feedname" id="feedname" required placeholder="feed name"  pattern="[a-zA-Z]{3,}" title="please enter more than three letters">
 <br><br>
 <label style="margin-left: 28px;" for="">Feed Date<span style="color: red;"><sup>*</sup></span>:</label>
 <input type="date" name="feeddate" id="feeddate" required placeholder="" title="please enter the date you feedback">
 <br><br>
 <label style="margin-left: 5px;" for="">Feed Purpose<span style="color: red;"><sup>*</sup></span>:</label>
 <textarea name="feedpurpose" id="feedpurpose" placeholder="like this...." rows="5px" cols="30px" required> </textarea>
	<br> <br>
 <input style="margin-left: 130px;background-color: green;color: white;font-size: 23px;" type="submit"value="Submit" name="submit">
 

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

if(isset($_POST['submit'])){
    $fedid =$_POST["feedid"];
    $fedname =$_POST["feedname"];
    $feddate =$_POST["feeddate"];
    $fedpurpose =$_POST["feedpurpose"];

$insert ="INSERT INTO CasherFeedback values(".$fedid.",'".$fedname."','".$feddate."','".$fedpurpose."')";
if(mysqli_query($connection,$insert)){
    echo "Inserted Succesfully";
}
else{
    echo "Not Inserted";
}
    }

?>

