<! DOCTYPE html>
<html lang="en">
<head>
 <title>rentcar.com</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width = device-width , initial-scale = 1">
 <link rel = "stylesheet" href="bootstrap/css/bootstrap.css">
 <script src = "js/jquery.js"></script>
  <script src = "bootstrap/js/bootstrap.js"></script>
 
       
		<img src="image1.png"alt="image1"height="90" width="500">
		</head>
<body>
		
		<nav class="navbar navbar-default">
  		<div class="container-fluid" style="background-color:#00CCCC">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Rwanda</a>
    	</div>
    	<center><ul class="nav navbar-nav" style="background-color:#FFFFFF">
     	 		<li class="active"><a href="index.php">home</a></li>
      			
				<li><a href="bookedcar.php">booked car</a></li>
      			<li><a href="carlist.php">car list</a></li>
      			<li><a href="login.php">help</a></li>
    			</ul>
  		</div>
		</nav>
		
		<?php
			//Add connection to database
			include ('dbconnect.php');
			//create Query to display data
			$query = "SELECT * FROM employee";
			$result = mysqli_query($conn, $query);
			?>

			<div class="container bg-info" style="padding-top:20 px; padding-bottom:20px;">
				
				<div class="row">
				<div class="col-sm-8">
					<p><img src="anima.gif"width="80%" height="20%"> </p><br>

						<img src="carl.jpg" height="60%" width=80%>
						</div>
					
						<div class="col-sm-4">
						ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
				</div>
				</div>		
					
				
					
</body>
</html>