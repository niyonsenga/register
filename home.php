<! DOCTYPE html>
<html lang="en">
<head>
 <title>rentcar.com</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width = device-width , initial-scale = 1">
 <link rel = "stylesheet" href="bootstrap/css/bootstrap.css">
 <script src = "js/jquery.js"></script>
  <script src = "bootstrap/js/bootstrap.js"></script>
  
  <script>
			function myFunction() {
    		var x = document.getElementByname("address").value;
	  		var x = document.getElementByname("post").value;
    		document.getElementByname("demo").innerHTML = x;
			}
			</script>
		<div class="container">
		<div class="col-sm-12">
		<div class="jumbotron text-right">
  <h3>rwanda travel with car..</h3>
   		<img src="image1.png"alt="image1"height="54" width="489"></div>
		</div>
		</div>
		</div>
		<nav class="navbar navbar-default">
  		<div class="container-fluid" style="background-color:#00CCCC" >
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Rwanda</a>
    	</div>
    	<ul class="nav navbar-nav" style="background-color:#FFFFFF">
     	 			<li style="background-color:"><a href="home.php">home</a></li>
      				<li style="background-color:"><a href="check.php">check & update</a></li>
      				<li style="background-color:"><a href="login.php">logout</a></li>
    				</ul>
  					</div>
					</nav>
		</head>
		<body>
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
				<center><h4>welcame again </h4><center>
	<img src="image3.jpg" width="200" height="120">&nbsp;<img src="image4.jpg" width="200" height="120">
	<center><h4>our vision</h4></center>
					
					
					<p>Welcome to the Rwanda rent car ltd campany. We hope to provide you with all information regarding our services, condition , requirements and how to book/reservation. The office of the rwanda rent car is under the office of the general director in charge of markenting and production. We coordinate all matters pertaining to the cars renting such as; car renting car buying,......</p>
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					
				<center><h4>about rwanda rentcars ltd</h4></center>
					
				<p>Enterprise can help you join or create a local carpool in minutes. Save time, money—and reduce your stress on the way to work</p>
					
						</div>
					
						<div class="col-sm-4" style="background-color:#999999">
						
        <p>please fill the form to  book a car</p>
		
	<form class="form-horizontal" role="form" method="POST" action="insert.php">
	   <div class="form-group"><label for="address" class ="control-label col-sm-4">first_name</label>
		<div class="col-sm-0.2">
	      <input type="text"  name="first_name" >
		</div>
	    </div>
	   <div class="form-group"><label for="address" class ="control-label col-sm-4">last name</label>
		<div class="col-sm-0.2">
	      <input type="text"  name="last_name" >
		</div>
	    </div>
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">identity</label>
		<div class="col-sm-0.2">
	      <input type="text" name="sex" >
		</div>
	    </div>
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">car name </label>
		<div class="col-sm-0.2">
	      <input type="text" name="birth_date" >
		</div>
	    </div>
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">car plake </label>
		<div class="col-sm-0.2">
	      <input type="text" name="phone_number" >
		</div>
	    </div>
		
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">pick date</label>
		  <input type="date" name="address" value="2017-10-10">
	    </div>
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">return date</label>
		<div class="col-sm-0.2">
	     <input type="date" name="post" value="2017-10-10">
		</div>
	    </div>
		
		
		<div class="form-group">
	      <label for="address" class ="control-label col-sm-4">car picture</label>
		<div class="col-sm-0.2">
	     <input type="file" name="image" value="image">
		</div>
	    </div>

	   <div class="col-sm-offset-2 col-sm-8">
	     <input type="submit" name="registration"value="send request">
		<a href="check.php">view list</a>
	   </div>
	</form>

				</div>
				
				<div class="row">
				 <div class="col-sm-offset-3 col-sm-12">
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				<p>Copyright &copy; 2017 &nbsp;niyonsenga emmanuel <a href="#">&nbsp;rentcar.com</a></p>
				</div>
				</div>
				</div>			
</body>
</html>