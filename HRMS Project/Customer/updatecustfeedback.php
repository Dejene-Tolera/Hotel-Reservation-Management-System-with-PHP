<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Customer Feedback Board</title>
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
            <li><a href="Customer_home.php"style="margin-left: 5px">Home</a></li>
            <li><a href="custAbout.php"style="margin-left: 10px">About</a></li>
            <li><a href="custcontact.php"style="margin-left: 10px">Contact</a></li>
            <li><a href="custhelp.php"style="margin-left: 10px">Help</a></li>
            <li><a href="custcust.php"style="margin-left: 10px">Customer</a></li>
            <li><a href="custfeedback.php"style="margin-left: 10px"   id= "active">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 400px;">Logout</a></li>
		</ul>
		</div>
	</div>
    <div id="content_area">
		<div id="left_col">
        <h2>Feedback&nbsp;/Update Feedback&nbsp;</h2>
		
	<ul>
		<li><a href="castFeedSubmit.php">Make Feedback</a></li>
        <li><a href="updatecustfeedback.php" >Update feedback</a></li>
        </ul>
		</div>

	<div id="content_area">
	    
		<div id="right_col">
		
		
		<div class="right_info" style="margin-right: 100px;">
                       <dl>
                    <dd>
                     <html>
<head>
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Update Customer Feedback Form </h2>
<body>
<form action="updatecustfeedback.php" method="post">
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
 <textarea name="feedpurpose" id="feedpurpose"required placeholder="like this...."rows="5px" cols="30px" > </textarea>
	<br> <br>
 <input style="margin-left: 130px;background-color: green;color: white;font-size: 23px;" type="submit" value="Update" name="update">
 

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
    $fedid =$_POST["feedid"];
    $fedname =$_POST["feedname"];
    $feddate =$_POST["feeddate"];
    $fedpurpose =$_POST["feedpurpose"];

$update ="UPDATE CustomerFeedback set FeedbackID='".$fedid."',FeedbackName='".$fedname."',FeedbackDate='".$feddate."',FeedbackPurpose='".$fedpurpose."' where FeedbackID='$fedid'";
    if(mysqli_query($connection,$update)){
        echo "Update Succesfully";
    }
    else{
        echo "Not Updated";
    }
        
    }
    $connection->close();
?>

