<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Food Registration Board</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">

      <script>
function Registration(form){
 let foodname=document.getElementById("foodname").value;
 let foodtype=document.getElementById("foodtype").value;
 let foodprice=document.getElementById("foodprice").value;
 if(foodname==" "||foodtype==" "||foodprice==" "){
  alert("please fullfill all information")

 }
 else{
     alert("Succesfully fulfill")
 }

}
function clear(form)
{
 document.getElementById("foodname").value="";
 document.getElementById("foodtype").value="";
 document.getElementById("foodprice").value="";
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
        <h2>Food&nbsp;/Update&nbsp;</h2>
		
	<ul>
        <li><a href="FoodRegistration.php">Registration</a></li>
        <li><a href="reviewfood.php">View</a></li>
        <li><a href="updatefood.php">Update</a></li>
        <li><a href="deletefood.php" >Delete</a></li>
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
<h2 style="margin-left: 50px;color: blue; margin-left: 10px;">Update Food Registration</h2>
<body>
<form action="updatefood.php" method="post">
 <label style="margin-left: 21px;" for="">Food Name<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="foodname" id="foodname" required>
    <option value="select">--select--</option>
     <option value="Pasta">Pasta</option>
    <option value="Firfir">Firfir</option>
    <option value="Sandwich">Sandwich</option>
    <option value="Beyayent">Beyayent</option>
    </select>
 <br><br>
 <label style="margin-left: 30px;" for="">Food Type<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="foodtype" id="foodtype" required>
    <option value="select">--select--</option>
     <option value="Breakfast">Breakfast</option>
    <option value="Launch">Launch</option>
    <option value="Dinner">Dinner</option>
    <option value="Meat">Meat</option>
    </select>
 <br><br>
 <label style="margin-left: 30px;" for="">Food Price<span style="color: red;"><sup>*</sup></span>:</label>
 <select name="foodprice" id="foodprice" required>
    <option value="select">--select--</option>
     <option value="50.75">50.75</option>
    <option value="150.45">150.45</option>
    <option value="45">45</option>
    <option value="200">200</option>
    </select>
	<br> <br>
 <input style="margin-left: 100px;background-color: green;color: white; font-size:20px;" type="submit" onclick="Registration(this.form)" value="Update" name="update">
 

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
    $fname =$_POST["foodname"];
    $ftype =$_POST["foodtype"];
    $fprice =$_POST["foodprice"];
    
    $update ="UPDATE Food set Food_Name='".$fname."',Food_Type='".$ftype."',Food_Price='".$fprice."' where Food_Name='$fname'";
    if(mysqli_query($connection,$update)){
        echo "Update Succesfully";
    }
    else{
        echo "Not Updated";
    }
        
    }
    $connection->close();
?>
