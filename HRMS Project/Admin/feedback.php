<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Board</title>
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
		    <li><a href="Admin_home.php"style="margin-left: 5px">Home</a></li>
            <li><a href="about.php"style="margin-left: 10px">About</a></li>
            <li><a href="administrator.php"style="margin-left: 10px">Administrator</a></li>
            <li><a href="employee.php"style="margin-left: 10px">Employee</a></li>
            <li><a href="casher.php"style="margin-left: 10px">Casher</a></li>
            <li><a href="food.php"style="margin-left: 10px">Food</a></li>
            <li><a href="beverage.php"style="margin-left: 10px">Beverage</a></li>
            <li><a href="customer.php"style="margin-left: 10px">Customer</a></li>
            <li><a href="feedback.php"style="margin-left: 10px"  id="active">Feedback</a></li>
            <li><a href="login.php" style="margin-left: 10px;">Logout</a></li>
            
			
		</ul>
		</div>
	</div>
	<div id="content_area">
		<div id="left_col">
		<h2>Home&nbsp;/Feedback&nbsp;</h2>
		
	   <ul>
        <li><a href="viewcustomfeedback.php">View Customer Feedback</a></li>
        <li><a href="viewcaashfeedback.php">View Casher Feedback</a></li>
        <li><a href="deletecustfeedback.php">Delete Customer Feedback</a></li>
        <li><a href="deletecashfeedback.php" >Delete Casher Feedback</a></li>
		</ul>
		</div>
		<div id="right_col">
		          
				   <div class="right_info" style="margin-right: 100px;">
				   <dl>
                    <dt style="margin-left: 30px;color:blue;">Customer and Casher Feedback</dt>
                    <dd>
                    <ul type="circle">
                     <li>Every Customer can make feedback. </li>
                     <li>Every Casher can make feedback.</li>
                     <li>Both can feedback for different purpose.</li>
                     <li>Both can feedback for ask something that wrong for them.</li>
    
               </ul>
                    </dd>
                   
                    </dl>
                  </div>
		</div>
	</div>
	
	<div id="footer">
   Wolkite University Information system 3rd Year Student Group #1.<br/>
                        &copy; 2013 E.C All Right Reserved.
						
	</div>
</div>
</body>
</html>

