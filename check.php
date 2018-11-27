<! DOCTYPE html>
<html lang="en">
<head>
 <title>rentcar.com</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width = device-width , initial-scale = 1">
 <link rel = "stylesheet" href="bootstrap/css/bootstrap.css">
 <script src = "js/jquery.js"></script>
  <script src = "bootstrap/js/bootstrap.js"></script>
		</head>
<body>

<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div class="jumbotron text-right">
  <h1>rwanda travel with cars.</h1>
  <img src="image1.png"alt="image1"height="50" width="500"> 
</div>
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
 			 <?php

include('dbconnect.php');

$query="SELECT * FROM employee";
$result = mysqli_query($conn,$query);
?>
<body>

<?php

include('dbconnect.php');

$query="SELECT * FROM employee";
$result = mysqli_query($conn,$query);


?>


<div class="col-sm-8">
      	<center><h6>all people wants to borrow and datails information about car they want</h6></center>
		 &nbsp;
        <table class="table">
        <thead>
        		<th>first name</th>
						<th>Last Name</th>
						<th>identity </th>
						<th>car name</th>
						<th>car plaker</th>
						<th>pick date</th>
						<th>return date </th>
						<th> car picture</th>
						<th>modify record</th>

        </thead>
        	<tbody>



                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                ?>
        		<tr>
							
							<td><?php echo $row['first_name']; ?></td>
							<td><?php echo $row['last_name']; ?></td>
							<td><?php echo $row['sex']; ?></td>
							<td><?php echo $row['birth_date']; ?></td>
							<td><?php echo $row['phone_number']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['post']; ?></td>
							<td><?php echo $row['image']; ?>
							<img src="car/'$row[image].'"style="width:50px";height:50;/></td>
							<td>	
						
        			<a href="editformvava.php?id=<?php echo $row['employee_id']?>" class="btn btn-success" role="button">Edit</a></td>
        			<td><a href="delete.php?id=<?php echo  $row['employee_id']?>" class="btn btn-primary" role="button">Delete</a>
                   </td>
                 </tr>
                 <?php
                 }
                mysqli_close($conn);
                ?>
                 </tbody>
                 </table>
                 
      	 </div>
         
		 <div class="row">
	    <div class="col-sm-12 col-md-offset-3"> 
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